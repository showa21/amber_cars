<?php

namespace Database\Factories;

use App\Models\VehicleModels;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleModelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleModels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
         return [
             
            //     'vhcl_model_nm' => $this->faker->vhcl_model_nm,
            //     'year' => $this->faker->year,
            //     'color' => $this->faker->color,
            //     'cost' => $this->faker->cost,
            //     'condition' => $this->faker->condition,
            //     'mileage'	=> $this->faker->mileage,
            //     'capacity' => $this->faker->capacity,	
            //     'driver_side' => $this->faker->driver_side,	
            //     'trans_type' => $this->faker->trans_type,
            //     'vehicle_type_id' => $this->faker->vehicle_type_id,
            //     'remember_token' => Str::random(10),
             ];
        
    }
}
