<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $new_trip = new Trip();	
            $new_trip->start_city = $faker->city();
            $new_trip->destination = $faker->city();
            $new_trip->price = $faker->randomFloat(2, 100, 9999);
            $new_trip->duration = $faker->numberBetween(1, 20);
            $new_trip->start_date = $faker->date();
            $new_trip->return_date = $faker->date();
            $new_trip->save();
        }
    }
}
