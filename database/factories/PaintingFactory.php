<?php

namespace Database\Factories;

use App\Models\Painting;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaintingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Painting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autor' =>$this->faker->name(),
            'precio' =>$this->faker->randomNumber(3),
            'entrega' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
