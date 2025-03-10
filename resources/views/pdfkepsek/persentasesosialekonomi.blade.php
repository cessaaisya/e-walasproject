<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persentase Sosial Ekonomi</title>
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

<div class="title">PERSENTASE SOSIAL EKONOMI</div><br><br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Sosial Ekonomi</th>
                <th>Jumlah</th>
                <th>Persentase</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($persentasesosialekonomi as $idx => $data)
                <tr>
                    <td>{{ $idx + 1 }}</td>
                    <td>{{ $data->jenis_sosial_ekonomi }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->persentase }}</td>
                    <td>{{ $data->keterangan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
