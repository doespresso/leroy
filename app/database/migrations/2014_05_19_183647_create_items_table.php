<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('title_alt');
			$table->integer('cat_id');
			$table->mediumText('desc');
			$table->mediumText('desc_alt');
			$table->integer('price');
			$table->string('img');
			$table->string('alias');
			$table->tinyinteger('active');
			$table->tinyinteger('sale');
			$table->tinyinteger('chief');
			$table->tinyinteger('new');
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
		Schema::drop('items');
	}

}
