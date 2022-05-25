<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'status' => "ativo",
            'responsible_for_insert' => $this->faker->name,        
            'date_of_insert' => now(),
            'type' => 'tipo',
            'model' => $this->faker->name,
            'brand' => $this->faker->name, 
            'year' => $this->faker->randomNumber(4),       
            'license_plate' => $this->faker->hexcolor,
            'value' => $this->faker->hexcolor,
            'equipment' => $this->faker->randomNumber(3),        
        ];
    }
}
