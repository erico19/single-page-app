<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->string('email',128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',1000);
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //create_password_resets_table.php
            $table->string('email',128)->index();

        });
    }

        /**

     * Reverse the migrations.

     *

     * @return void

     */

     public function down()

     {
 
         Schema::table('users', function (Blueprint $table) {
 
             $table->dropColumn('avatar');
 
         });
 
     }
}
