<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'price'=>'200',
            'service1'=>$this->faker->sentence,
            'service2'=>$this->faker->sentence,
            'service3'=>$this->faker->sentence,
            'service4'=>$this->faker->sentence,
        ];
    }
}
