<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status'=> 'ativo',
            'responsible_for_insert'=> $this->faker->name,       
            'provider'=> $this->faker->company,
            'brand'=> $this->faker->company,
            'model'=> $this->faker->company,
            'imei'=> $this->faker->randomNumber(9),
            'simcard'=> $this->faker->randomNumber(6),
        ];
    }
}
