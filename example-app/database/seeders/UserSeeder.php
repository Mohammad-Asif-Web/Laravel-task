<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Md Asif',
             'role' => 1,
             'email' => 'asif@mail.com',
             'password' => 123456
            ],
            ['name' => 'Salman Hossain',
             'role' => 2,
             'email' => 'salman@mail.com',
             'password' => 123456
            ],

          ];
     
          foreach($users as $user){
            User::create($user);
          }
    }
}