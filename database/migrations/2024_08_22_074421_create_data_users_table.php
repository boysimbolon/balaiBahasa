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
        Schema::create('data_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('no_Peserta')->constrained('users');
            $table->string('nama');
            $table->string('nik');
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->enum('pekerjaan',['Pelajar','Mahasiswa','Guru','Dosen','Pegawai Negeri Sipil (PNS)','Tentara Nasional Indonesia (TNI)','Kepolisian RI (POLRI)','Karyawan Swasta','Wirausaha', 'Belum/Tidak Bekerja']);
            $table->string('NIDN')->nullable();
            $table->string('alamat');
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->string('instansi');
            $table->integer('num_telp');
            $table->string('email');
            $table->enum('Pendidikan',['Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','D-I/II','D-III','D-IV','S1','S2','S3']);
            $table->integer('thn_lulus');
            $table->string('kewarganegaraan');
            $table->string('bhs_seharian');
            $table->text('pasFoto');
            $table->text('ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_users');
    }
};
