<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      $limit = 33;

      for ($i = 0; $i < $limit; $i++) {
        DB::table('movies')->insert([
            'title' => $faker->title,
            'genre' => $faker->country,
            'director' => $faker->name,
            'year' => $faker->year,
            'storyline' => $faker->text


        ]);
      }
    }
}
