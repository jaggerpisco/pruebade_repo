<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nam_id'=> $this->faker->biasedNumberBetween('1','2'),
            'meas_id'=> $this->faker->biasedNumberBetween('1','2'),
            'damp_id'=> $this->faker->biasedNumberBetween('1','2'),
            'mat_id'=> $this->faker->biasedNumberBetween('1','2'),
            'prod_stock'=> $this->faker->biasedNumberBetween('1','2'),
        ];
    }
}
