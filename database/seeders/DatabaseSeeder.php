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
       // User::factory(10)->create();
        //PostFactroy::factory(50)->create();

        //Post::factory()->count(5)->create();

        $this->call(ContactSeeder::class);
    }
}
