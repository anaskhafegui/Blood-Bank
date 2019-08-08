<?php

use App\Governorate;
use Illuminate\Database\Seeder;

class GovernorateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Governorate::create([
            'name' => 'Giza',

        ]);
        Governorate::create([
            'name' => 'Cairo',

        ]);
    }
}
