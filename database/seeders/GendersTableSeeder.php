<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $genders = ['Male', 'Female', 'Other'];
        foreach ($genders as $gender) {
            DB::table('genders')->insert([
                'gender' => $gender,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
