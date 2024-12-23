<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('members')->insert([
                'name' => 'Member ' . $i,
                'position_id' => rand(1, 10),
                'mail' => 'member' . $i . '@example.com',
                'gender_id' => rand(1, 3),
                'group_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
