<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
            Item::create(array(
                'title' => $faker->name,
                'title_alt' => $faker->name,
                'desc' => $faker->name,
                'price' => $faker->randomNumber(100, 2500),
                'cat_id' => $faker->randomNumber(1, 9),
                'active' => 1
            ));
		}
	}

}