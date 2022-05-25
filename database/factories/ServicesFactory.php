<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
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
            'status' => $this->faker->name,
            'category' => $this->faker->name,
            'name' => $this->faker->name,
            'price' => $this->faker->name,
            'responsible_for_insert' => $this->faker->name,
            'company_id'  => $this->faker->name,
        ];
    }
}
