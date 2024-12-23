<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('positions')->insert([
                'name' => 'Position ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
