<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
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

        User::create([
            'name' => 'admin' , 
            'email' => 'admin@me.com' , 
            'password' => bcrypt('admin') , 
        ]);

        Job::factory(50)->create(); 
    }
}
