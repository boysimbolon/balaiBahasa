<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailVerificationTokenToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mydb')->table('users', function (Blueprint $table) {
            $table->string('email_verification_token')->nullable()->after('pin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mydb')->table('users', function (Blueprint $table) {
            $table->dropColumn('email_verification_token');
        });
    }
}
