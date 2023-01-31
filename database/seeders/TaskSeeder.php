<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Task::create([
                'task' => $faker->sentence,
                'toDoDate' => $faker->dateTime,
                'doneDate' => $faker->dateTime,
            ]);
        }
    }

}
