<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GalleriesTableSeeder extends Seeder {

	public function run()
	{


        Gallery::create(array("title" => 'Интерьер', "title_alt" => 'Interior', 'active' => 1));
        Gallery::create(array("title" => 'Блюда', "title_alt" => 'Dishes', 'active' => 1));
        Gallery::create(array("title" => 'Терраса', "title_alt" => 'Terrace', 'active' => 1));
        Gallery::create(array("title" => 'Концерты', "title_alt" => 'Concerts', 'active' => 1));

	}

}