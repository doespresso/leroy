<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galleries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('title_alt');
			$table->mediumText('desc');
			$table->mediumText('desc_alt');
			$table->string('img');
			$table->string('alias');
			$table->tinyInteger('active');
			$table->tinyInteger('new');
			$table->string('icon');
			$table->mediumText('svg');
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
		Schema::drop('galleries');
	}

}
