<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('status')->insert([
                'name' => 'Status ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
