<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it-IT');

        for ($i=0; $i < 100 ; $i++) { 

            $newTrain = new Train();

            $newTrain->agency = $faker->randomElement(['Trenitalia', 'TreNord']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->date();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numberBetween(10000, 65000);
            $newTrain->carriage_number = $faker->numberBetween(1, 30);
            $newTrain->in_time = $faker->randomElement(['yes', 'no']);
            $newTrain->cancelled = $faker->randomElement(['yes', 'no']);
            $newTrain->save();
        }

    }
}
