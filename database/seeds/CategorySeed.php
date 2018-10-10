<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data  = [];
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $name   = $faker->name;
            $data[] = [
                'slug'        => str_slug($name),
                'name'        => $name,
                'level'       => 1,
                'is_head_red' => 1,
                'is_new'      => rand(0, 1),
            ];
        }
        DB::table('categories')->insert($data);
    }
}
