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
        Schema::connection('mydb')->table('data_users', function (Blueprint $table) {
            $table->string('city')->nullable(); // Contoh menambahkan kolom string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_users', function (Blueprint $table) {
            //
        });
    }
};
