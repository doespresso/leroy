<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slides', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sort')->default('10');
			$table->string('title');
			$table->string('subtitle');
			$table->string('title_alt');
			$table->string('subtitle_alt');
			$table->mediumText('desc');
			$table->mediumText('desc_alt');
			$table->string('img');
			$table->string('alias');
			$table->string('link');
			$table->string('link_text');
			$table->mediumText('special');
			$table->mediumText('navigation');
			$table->tinyInteger('active');
			$table->tinyInteger('sale');
			$table->tinyInteger('chief');
			$table->tinyInteger('new');
			$table->string('style');
			$table->tinyInteger('light_bg');
			$table->string('bg_color');
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
		Schema::drop('slides');
	}

}
