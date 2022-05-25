<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cnpj'=> $this->faker->company,
            'social_Reason'=> $this->faker->company,
            'fantasy_name'=> $this->faker->company,
            'status'=> "ativo",
            'name_responsible'=> $this->faker->name,
            'last_name_responsible'=> $this->faker->lastName,
            'email_responsible'=> $this->faker->companyEmail,
            'color'=> $this->faker->hexcolor,
            'logo' => 'logo',
            'monthly_payment' => $this->faker->hexcolor,
            'activation' => $this->faker->hexcolor,
            'price_per_plate'=> $this->faker->hexcolor,
            'user_limit'=> $this->faker->hexcolor,
            'price_per_extra_user'=> $this->faker->hexcolor,
            'responsible_to_insert' => $this->faker->name
        ];
    }
}
