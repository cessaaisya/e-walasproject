<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_presensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('presensis_id');
            $table->foreign('presensis_id')->references('id')->on('presensis')->onDelete('cascade')->onUpdate ('cascade');
            $table->unsignedBigInteger('siswas_id');
            $table->foreign('siswas_id')->references('id')->on('siswas')->onDelete('cascade')->onUpdate ('cascade');
            $table->enum('status', ['izin', 'sakit', 'hadir', 'alfa'])->default('hadir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_presensis');
    }
};
