<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->integer('type_id')->unsigned()->references('id')->on('types');
            $table->string('country');
            $table->string('title');
            $table->string('url')->unique();
            $table->integer('clicklimit')->unsigned();
            $table->integer('cpc')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('social_sites');
    }
}
