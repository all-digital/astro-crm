<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SimcardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->name,
            'status'=> "cancelado",
            'responsible_for_insert'=> $this->faker->name,
            'provider' => 'all provider',        
            'brand' => 'all brand',
            'number_of_line' => '12353652',
            'iccid' => $this->faker->randomNumber(8),  
            'company_id' => 1   
        ];
    }
}
