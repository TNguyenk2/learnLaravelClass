<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class customersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
        [    
            'name' => $this->faker->name(),
            'gender' => $this->faker->name(),
            'email' => $this->faker->unique->email,
            'address' => $this->faker->name(),
            'phonenumber' => $this->faker->numerify($string = '###'),
            'note' => $this->faker->sentence,
        ];
    }
}
