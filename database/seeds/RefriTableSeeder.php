<?php

use Illuminate\Database\Seeder;
use Fortics\Refrigerant;

class RefriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
            $med = 'ML';
            if($i & 3 == 0){
                $med = 'L';
            }

            Refrigerant::insert([
                'brand' => $faker->word , 
                'type'  => $faker->word, 
                'flavor'  => $faker->word, 
                'litrage'  => $med, 
                'value'  => $faker->randomFloat(NULL, 0.99 , 15), 
                'stoke' => $faker->numberBetween(0, 999)
            ]);
        }

    }
}
