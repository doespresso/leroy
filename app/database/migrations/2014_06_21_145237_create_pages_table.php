<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('title_alt');
			$table->mediumText('desc');
			$table->mediumText('desc_alt');
			$table->string('img');
			$table->string('alias');
			$table->string('link');
			$table->integer('gallery_id');
			$table->tinyInteger('active');
			$table->integer('sort');
			$table->string('style');
			$table->string('color');
			$table->string('bgcolor');
			$table->mediumText('icon');
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
		Schema::drop('pages');
	}

}
