<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KnjigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naslov_knjige'=>$this->faker->word(),
            'autor_knjige'=>$this->faker->name(),
        ];
    }
}
