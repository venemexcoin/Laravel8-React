<?php

namespace Database\Factories;

use App\Models\Prueba;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PruebaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prueba::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'user_id' => User::factory()
        ];
    }
}
