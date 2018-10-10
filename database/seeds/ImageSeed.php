<?php

use Faker\Factory;
use Faker\Provider\Image;
use Illuminate\Database\Seeder;

class ImageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data       = [];
        $categories = DB::table('categories')->get();
        $faker      = Factory::create();
        $faker->addProvider(new Image($faker));
        for ($i = 0; $i < 200; $i++) {
            $name   = $faker->name;
            $data[] = [
                'slug'        => str_slug($name),
                'title'       => $name,
                'thumb'       => $faker->imageUrl(320, 240),
                'category_id' => $categories[rand(0, count($categories) - 1)]->id,
            ];
        }
        DB::table('images')->insert($data);
    }
}
