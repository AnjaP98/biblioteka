<?php

namespace Database\Factories;

use App\Models\KategorijaClana;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime'=>$this->faker->name(),
            'kategorija_id'=>KategorijaClana::factory(),
            
        ];
    }
}
