<?php

use App\Models\Family;
use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::create(['name' => 'Птицы']);
        Family::create(['name' => 'Хишник']);
    }
}
