<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceOrderSalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client'=> $this->faker->name,
            'status'=> 'ativo',
            'company'=> $this->faker->company,        
            'type_order_of_service'=> "venda",
            'vehicles'=> 'carro',
            'equipments'=> $this->faker->name,
            'simcard'=> $this->faker->name,
            'services'=> $this->faker->name,       
            'adhesion_fee'=> $this->faker->name,        
            'monthly_payment'=> $this->faker->name,        
            'recurrence'=> $this->faker->name,        
            'responsible_for_insert'=> $this->faker->name,
            'services_order_sale'=> $this->faker->name,
            'subtype'=> $this->faker->name,       
            'address_client'=> $this->faker->name,
            'zip_code_customer'=> $this->faker->name,
            'city_client'=> $this->faker->name,
            'country_client'=> $this->faker->name,            
        ];
    }
}
