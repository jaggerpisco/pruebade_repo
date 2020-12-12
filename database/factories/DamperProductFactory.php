<?php

namespace Database\Factories;

use App\Models\DamperProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class DamperProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DamperProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'damp_description' => $this->faker->randomElement($array = ['Si', 'No']),
        ];
    }
}
