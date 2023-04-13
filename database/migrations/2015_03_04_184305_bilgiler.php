<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bilgiler extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('bilgiler', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('katid');
            $table->string('yil');
            $table->string('derece');
            $table->text('baslik');
            $table->text('aciklama');
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
        Schema::drop('bilgiler');
	}

}
