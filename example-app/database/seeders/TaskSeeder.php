<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['name' => 'Ona Harvey',
             'address' => 'North Euniside'
            ],
            ['name' => 'Mr. Mraz',
             'address' => 'Stanton Station'
            ],
            ['name' => 'Melissa Carter',
             'address' => 'Light House'
            ],
            ['name' => 'Melvin koch',
             'address' => 'Nolan Harbours'
            ],
          ];
     
          foreach($tasks as $task){
            Task::create($task);
          }
    }
}
