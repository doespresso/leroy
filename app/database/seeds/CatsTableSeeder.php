<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CatsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Cat::create(array(
                'title' => $faker->name,
                'menu_id' =>  $faker->randomNumber(1, 5),
                'desc' => $faker->name,
                'active' => 1
            ));
		}
	}

}