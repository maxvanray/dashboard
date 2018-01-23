<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('events')->insert([
	            'name' => $faker->name,
	            'description' => $faker->paragraph,
	            'price' => rand(0, 100) / 100, // 48.8932
	            'facilitator' => '1'
	        ]);
	    }
	}

}
