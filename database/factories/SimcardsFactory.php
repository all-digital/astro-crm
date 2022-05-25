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
            'status'=> "ativo",
            'responsible_for_insert'=> $this->faker->name,
            'provider' => 'provider',        
            'brand' => 'brand',
            'number_of_line' => 'number_of_line',
            'iccid' => $this->faker->randomNumber(8),        
        ];
    }
}
