<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AfishasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Afisha::create(array(
                'title' => $faker->name,
                'desc' => $faker->name,
                'active' => 1,
//                'day' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'day' => $faker->dateTimeThisYear(),
                'link'=>$faker->url,
        ));
		}
	}

}