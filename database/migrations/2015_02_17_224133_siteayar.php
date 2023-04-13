<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Siteayar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siteayar', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('baslik');
            $table->string('etiket');
            $table->string('aciklama');
            $table->string('mail');
            $table->string('keyword');
            $table->text('hakkimda');
            $table->string('tel');
            $table->string('resim', 200);
            $table->text('sosyal');
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
		Schema::drop('siteayar');
	}

}
