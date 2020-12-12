<?php

namespace Database\Factories;

use App\Models\NameProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class NameProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NameProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nam_product'=>$this->faker->randomElement($array = ['Disufor 4 vías','Disufor 3 vías','Disufor 2 vías','Rejilla rotacional','Rejilla lineal','Rejilla de retorno',' Rejilla Doble Flexión']),
            'nam_codigo'=>$this->faker->randomElement($array = ['code 1','code 2','code 3','code 4','code 5']),
        ];
    }
}
