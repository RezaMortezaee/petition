<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Petition;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Petition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Each petition is just for a single user
        
        return [
            'title' => $this->faker->word,
            'body' => $this->faker->text($maxNbChars = 200),
            'user_id' => $this->faker->unique(true)->numberBetween(1, 50)
        ];
    }
}
