<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TranTable::factory()->count(10)->create();

    }
}
