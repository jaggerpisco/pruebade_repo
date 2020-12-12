<?php

namespace Database\Factories;

use App\Models\MaterialProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaterialProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mat_name'=>$this->faker->randomElement($array = ['Galvanizado','Aluminio','Acero']),
        ];
    }
}
