<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAfishasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('afishas', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('day');
			$table->string('title');
			$table->string('short');
			$table->mediumText('desc');
			$table->string('bg_color');
            $table->tinyInteger('light_bg');
			$table->string('img');
			$table->string('video');
			$table->string('link');
			$table->tinyInteger('active');
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
		Schema::drop('afishas');
	}

}
