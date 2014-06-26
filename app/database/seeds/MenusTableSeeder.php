<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MenusTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        Menu::create(array("title" => 'Основное меню', "title_alt" => 'Main menu', 'desc'=>'Блюда американской и европейской кухни. Фирменные стейки от шеф-повара ресторана Самуэля Спенсера', 'active' => 1));
        Menu::create(array("title" => 'Винная карта', "title_alt" => 'Wines', 'active' => 1));
        Menu::create(array("title" => 'Бар', "title_alt" => 'Bar', 'active' => 1));
        Menu::create(array("title" => 'Детское меню', "title_alt" => 'Baby menu', 'active' => 1));
        Menu::create(array("title" => 'Летняя веранда', "title_alt" => 'Summer terrase', 'active' => 1));
        Menu::create(array("title" => 'Бизнес ланч', "title_alt" => 'Lunch', 'active' => 1));
        Menu::create(array("title" => 'Завтраки', "title_alt" => 'Breakfasts', 'active' => 1));

    }

}