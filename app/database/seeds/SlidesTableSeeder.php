<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SlidesTableSeeder extends Seeder {

	public function run()
	{



                Slide::create(array(
                    "title" => "SUMMER TERRACE",
                    "title_alt" => "SUMMER TERRACE",
                    "subtitle" => "наша летняя веранда принимает гостей",
                    "img" => "terrace_ch_1.jpg",
                    "active" => 1
                ));
            Slide::create(array(
                "title" => "SUMMER TERRACE",
                "title_alt" => "SUMMER TERRACE",
                "subtitle" => "наша летняя веранда принимает гостей",
                "img" => "pic_man_1.jpg",
                "active" => 1
            ));
            Slide::create(array(
                "title" => "СhinChin",
                "title_alt" => "SUMMER TERRACE",
                "subtitle" => "наша летняя веранда принимает гостей",
                "img" => "bar_ch_1.jpg",
                "active" => 1
            ));

		}
	}

