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
//        Schema::table('data_users', function (Blueprint $table) {
//            $table->dropColumn('email'); // Menghapus kolom 'alamat'
//        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('email'); // Menghapus kolom 'alamat'
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
