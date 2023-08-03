<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * /**
 * Factory for generating fake user data.
 *
 * @method \App\Models\User createOne(array $attributes = [])
 * @method \App\Models\User|\Illuminate\Database\Eloquent\Collection create(int|array $attributes = [])
 */
class UserFactory extends Factory
{
    protected $model = \App\Models\User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;

        return [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): self
    {
        return $this->state(fn () => [
            'email_verified_at' => null,
        ]);
    }
}
