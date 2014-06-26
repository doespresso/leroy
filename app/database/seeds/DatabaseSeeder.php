<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		 $this->call('AfishasTableSeeder');
		 $this->call('UsersTableSeeder');
		 $this->call('MenusTableSeeder');
		 $this->call('CatsTableSeeder');
		 $this->call('ItemsTableSeeder');
		 $this->call('SlidesTableSeeder');
		 $this->call('GalleriesTableSeeder');
	}

}