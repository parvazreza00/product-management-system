<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //single data insert using create()
        User::create(
            [           
                'name'=>'parvaz',
                'email'=> 'parvazreza@gmail.com',
                'password' => bcrypt('password'),            
            ]);

            //multiple data insert using insert()
        User::insert([
            [
                'name'=>'parvazReza',
                'email'=> 'parvaz@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name'=>'reza',
                'email'=> 'reza@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name'=>'alom',
                'email'=> 'alom@gmail.com',
                'password' => bcrypt('password'),
            ]
        ]);

        $users = [
            [
                'name' => 'Hasan',
                'email' => 'hasan@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Tomal',
                'email' => 'tomal@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Shaheb',
                'email' => 'shaheb@gmail.com',
                'password' => bcrypt('password'),
            ]
        ];
        //multiple data insert using foreach loop
        foreach($users as $user){
            User::create($user);
        }

        // insert data by faker class
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }

    }
}


