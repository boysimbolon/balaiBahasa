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
        Schema::connection('mydb')->create('environtment_ujian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ujian')->constrained('list_ujian');
            $table->string('no_modul');
            $table->boolean('enroll_key')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
