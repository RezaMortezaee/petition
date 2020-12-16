<?php

namespace Database\Factories;

use App\Models\Sign;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'signed' => $this->faker->boolean($chanceOfGettingTrue = 50),
            // 'user_id' => $this->faker->unique(true)->numberBetween(1, 50)
        ];
    }
}
