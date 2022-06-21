<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class productsFactory extends Factory
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
            'price' => $this->faker->numerify($string='###'),
            'content' => $this->faker->sentence(500),
        ];
    }
}
