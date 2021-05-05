<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            // \App\Models\User::factory(10)->create();
        //each time when a user created, we create some questions for the user
        \App\Models\User::factory(10)->create()->each(function($user) { 
            $user->quotes()->saveMany( 
                // for each user, create 1-5 questions
               \App\Models\Quote::factory()->count(rand(1,100))->make()
            );
         });
    }
}
