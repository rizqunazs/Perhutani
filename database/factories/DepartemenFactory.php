<?php

namespace Database\Factories;

use App\Models\Departemen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartemenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Departemen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id" => $this->faker->randomElement(["EDP","MANREP","MARK","OPS","ENG","FIN","HRD"]),
            "nama" => $this->faker->company(),
            "tgl_berdiri" => $this->faker->date(),
            "id_pemimpin" => $this->faker->randomELement(["1","2","3","4","5"]),
            "lokasi" => $this->faker->address(),
        ];
    }
}
