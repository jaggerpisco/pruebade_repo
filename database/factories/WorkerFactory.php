<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_name' => $this->faker->firstName,
            'work_ape_paterno'=>$this->faker->lastname,
            'work_ape_materno'=>$this->faker->lastname,
            'work_fecha_nacimiento'=> $this->faker->dateTimeThisYear('+1 month'),
            'work_doc_identidad'=>$this->faker->biasedNumberBetween('44444444','77777777'), 
            'job_id'=> $this->faker->biasedNumberBetween('1','4'),
            'work_celular'=> $this->faker->e164PhoneNumber,
            'work_correo' => $this->faker->unique()->safeEmail,
            'work_direccion'=>$this->faker->city
        ];
    }
}
