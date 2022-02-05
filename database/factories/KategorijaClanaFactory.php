<?php

namespace Database\Factories;
use App\Models\KategorijaClana;
use Illuminate\Database\Eloquent\Factories\Factory;

class KategorijaClanaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv_kategorije'=>$this->faker->word(),
        
        ];
    }
}
