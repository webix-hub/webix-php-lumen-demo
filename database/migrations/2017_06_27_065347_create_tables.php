<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->dateTime('birthday');
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->integer('group_id');
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
        });

        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('userId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peoples');
        Schema::drop('groups');
        Schema::drop('documents');
        Schema::drop('files');
    }
}
