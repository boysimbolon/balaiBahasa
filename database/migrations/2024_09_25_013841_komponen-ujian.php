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
        Schema::connection('mydb')->create('list_ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->string('alamat');
            $table->integer('kapasitas');
            $table->timestamps();
        });

        Schema::connection('mydb')->create('tipe_ujian', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_ujian');
            $table->timestamps();
        });

        Schema::connection('mydb')->create('list_ujian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis_ujian')->constrained('tipe_ujian')->onDelete('cascade');
            $table->foreignId('id_ruangan')->constrained('list_ruangan')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('status');
            $table->timestamps();
        });

        Schema::connection('mydb')->create('pesan_ujian', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nim')->nullable();
            $table->foreignId('id_ruangan')->constrained('list_ruangan');
            $table->foreignId('id_ujian')->constrained('list_ujian'); // Mengubah cascade menjadi restrict
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::connection('mydb')->create('history', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nim')->nullable();
            $table->foreignId('id_pesanan')->constrained('pesan_ujian')->onDelete('cascade');
            $table->integer('skor');
            $table->integer('nilai1');
            $table->integer('nilai2');
            $table->integer('nilai3');
            $table->integer('nilai4');
            $table->string('no_sertificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mydb')->dropIfExists('history');
        Schema::connection('mydb')->dropIfExists('pesan_ujian');
        Schema::connection('mydb')->dropIfExists('list_ujian');
        Schema::connection('mydb')->dropIfExists('tipe_ujian');
        Schema::connection('mydb')->dropIfExists('list_ruangan');
    }
};
