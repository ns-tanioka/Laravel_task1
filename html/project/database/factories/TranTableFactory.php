<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TranTable;
use App\Models\OfficeMaster;

class TranTableFactory extends Factory
{
    protected $model = TranTable::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = OfficeMaster::all()->random(1)[0]->id;
        
        return [
            'member_id'=> $id,
            'product_name' => $this->faker->company,
            'buy_date' => $this->faker->sentence,
            'quantity' => $this->faker->randomNumber(5),
        ];
    }
}
