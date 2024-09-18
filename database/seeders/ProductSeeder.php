<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Orange',
                'cost' => 50000000,
                'amount' => 27,
            ],
            [
                'name' => 'Banana',
                'cost'  => 120000000,
                'amount'  => 17,
            ],
            [
                'name' => 'Bread',
                'cost'  => 70000000,
                'amount'  => 0,
            ],
        ]);
    }
}
