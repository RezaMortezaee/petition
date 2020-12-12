<?php

namespace Database\Factories;

use App\Models\Sign;
use App\Models\User;
use App\Models\Comment;
use App\Models\Petition;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            'sign_id' => $this->faker->unique(true)->numberBetween(1, 50),
            'petition_id' => $this->faker->unique(true)->numberBetween(1, 50),
            'comment_id' => $this->faker->unique(true)->numberBetween(1, 100),
        ];
    }
}
