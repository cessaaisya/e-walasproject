<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Wali Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .title {
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            background-color: #007bff;
            color: white;
            padding: 5px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        .info-table {
            width: 50%;
            margin-bottom: 10px;
        }
        .signature {
            margin-top: 30px;
            width: 100%;
            text-align: left;
        }
        .signature td, 
        .signature th {
        border: none !important;
        }
    </style>
</head>
<body>

    <div class="title">AGENDA WALI KELAS</div>

    <table class="info-table">
        <tr>
            <td>Wali Kelas</td>
            <td>: {{ $walasSelected->nama ?? 'Tidak Ada Data' }}</td>
        </tr>
        <tr>
            <td>Tahun Pelajaran</td>
            <td>: {{ (date('n') >= 7 ? date('Y') : date('Y') - 1) . '/' . (date('n') >= 7 ? date('Y') + 1 : date('Y')) }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Nama Kegiatan</th>
            <th>Hasil</th>
            <th>Waktu</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($agendaList as $idx => $agenda)
            <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $agenda->hari }}</td>
                <td>{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d-m-Y') }}</td>
                <td>{{ $agenda->nama_kegiatan }}</td>
                <td>{{ $agenda->hasil }}</td>
                <td>{{ $agenda->waktu }}</td>
                <td>{{ $agenda->keterangan }}</td>
            </tr>
        @endforeach
    </table>

    @php
        $wakaKurikulum = \App\Models\Kurikulum::first(); // Ambil satu data Waka Kurikulum
        \Carbon\Carbon::setLocale('id');
    @endphp

    <div class="signature">
        <table style="border: none; width: 100%;">
            <tr>
                <td style="text-align: center;">Mengetahui,</td>
                <td></td>
                <td style="text-align: center;">Cibinong, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <td style="text-align: center;">Waka. Bidang Akademik,</td>
                <td></td>
                <td style="text-align: center;">Wali Kelas,</td>
            </tr>
            <tr><td colspan="3"><br><br><br></td></tr>
            <tr>
                <td style="text-align: center;">({{ optional($wakaKurikulum)->nama ?? '_________________' }})</td>
                <td></td>
                <td style="text-align: center;">({{ optional($walasSelected)->nama ?? '_________________' }})</td>
            </tr>
            <tr>
                <td style="text-align: center;">NIP  {{ optional($wakaKurikulum)->nip ?? '......................' }}</td>
                <td></td>
                <td style="text-align: center;">NIP  {{ optional($walasSelected)->nip ?? '......................' }}</td>
            </tr>
        </table>
    </div>

</body>
</html>
