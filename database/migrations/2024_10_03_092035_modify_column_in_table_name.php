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
        Schema::connection('mydb')->table('environtment_ujian', function (Blueprint $table) {
            $table->string('enroll_key')->change();  // Ubah tipe data kolom enroll_key menjadi string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mydb')->table('environtment_ujian', function (Blueprint $table) {
            //
        });
    }
};
