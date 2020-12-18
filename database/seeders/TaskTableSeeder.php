<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class)->create([
            'name' => 'PHP',
            'complete' => false
        ]);

       
    }
}
