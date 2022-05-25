<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'company' => $this->faker->company,        
            'phase' => "conquistado",
            'status' => "ativo",
            'name_responsible'=> $this->faker->name,
            'type' => 'tipo',
            'cnpj_cpf' => $this->faker->randomNumber(8),       
            'social_reason' => $this->faker->company,        
            'fantasy_name' => $this->faker->company,        
            'cell_phone' => $this->faker->randomNumber(8),
            'phone' => $this->faker->randomNumber(8),
            'whatsapp_phone' => $this->faker->randomNumber(8),
            'email' => $this->faker->companyEmail,
            'email_finance'  => $this->faker->companyEmail,       
            'tracking_platform' => "tracking_platform"
            
        ];
    }
}
