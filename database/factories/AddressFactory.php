<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'number_address'  => $this->faker->randomNumber(2),
            'zip_code' => $this->faker->postcode,
            'city'  => $this->faker->city,
            'country'  => $this->faker->country,
            'state'  => $this->faker->state,
            'complement' => $this->faker->citySuffix
        ];
    }
}
