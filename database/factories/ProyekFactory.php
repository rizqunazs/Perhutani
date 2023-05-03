<?php

namespace Database\Factories;

use App\Models\Proyek;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyekFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyek::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id" => $this->faker->regexify('[A-Z]{3}[0-9]{3}'),
            "nama" => $this->faker->city(),
            "anggaran" => $this->faker->randomFloat(),
            "lokasi" => $this->faker->address(),
        ];
    }
}
