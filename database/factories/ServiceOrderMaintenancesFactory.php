<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceOrderMaintenancesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client' => $this->faker->name,
            'status' => $this->faker->name,
            'company' => $this->faker->name,
            'subtype' => $this->faker->name,        
            'type_order_of_service' => $this->faker->name,
            'vehicles' => $this->faker->name,
            'equipments' => $this->faker->name,
            'simcard' => $this->faker->name,
            'services' => $this->faker->name,       
            'cost' => $this->faker->name,        
            'new_equipment' => $this->faker->name,        
            'new_simcard' => $this->faker->name,
            'address_client' => $this->faker->name,
            'zip_code_client' => $this->faker->name,
            'city_client' => $this->faker->name,
            'country_client' => $this->faker->name,       
            'responsible_for_insert' => $this->faker->name
        ];
    }
}
