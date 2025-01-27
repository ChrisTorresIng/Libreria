<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmpleadoFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(),
            'correo' => fake()->unique()->safeEmail(),
            'cedula' => fake()->unique()->numerify('########'),
            'trabajo' => $this->faker->sentence(),
            'clave' => static::$password ??= Hash::make('password'),
        ];
    }
}
