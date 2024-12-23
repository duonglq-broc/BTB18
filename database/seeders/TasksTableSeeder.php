<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tasks')->insert([
                'title' => 'Task ' . $i,
                'start_date' => now()->subDays(rand(1, 10)),
                'end_date' => now()->addDays(rand(1, 10)),
                'scheduled_time' => now()->format('H:i:s'),
                'actual_time' => now()->format('H:i:s'),
                'minestone_id' => rand(1, 10),
                'complete_reason_id' => rand(1, 10),
                'priority_id' => rand(1, 10),
                'status_id' => rand(1, 10),
                'description' => 'Description for Task ' . $i,
                'created_by' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
