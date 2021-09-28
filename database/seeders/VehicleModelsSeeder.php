<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;    


class VehicleModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();   
        foreach (range(1,10) as $value){
            DB::table('vehicle_models')->insert([
                'vhcl_model_nm' => $faker->name,
                'year' => $faker->year,
                'color' => $faker->name,
                'cost' => $faker->name,
                'condition' => $faker->name,
                'mileage'	=> $faker->name,
                'capacity' => $faker->name,	
                'driver_side' => $faker->name,	
                'trans_type' => $faker->name,
                'vehicle_type_id' => $faker->name,

            
            ]);
        }//
    }
}
