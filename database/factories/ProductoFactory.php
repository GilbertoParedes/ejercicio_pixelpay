<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text($maxNbChars = 30),
            'precio' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'cantidad' => $this->faker->numberBetween($min = 10, $max = 200)
        ];
    }
}
