<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogusrTalbe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function(Blueprint $table){
        $table->increments('id');
        $table->timestamps();
        $table->string('email')->unique();
        $table->string('password');
        $table->string('name');
        $table->string('area');
        $table->string('experience');
        $table->rememberToken();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
