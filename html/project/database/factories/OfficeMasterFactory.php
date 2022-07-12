<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OfficeMaster;


class OfficeMasterFactory extends Factory
{
    protected $model = OfficeMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country,
            'address' => $this->faker->dateTimeThisDecade,
            'tel' => $this->faker->boolean,

        ];
    }
}
