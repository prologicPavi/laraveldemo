<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Post,
    Category
};

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
      // Post::factory(10)->create(); 
       $this->call(ContactSeeder::class);
      // Category::factory(10)->create();
    }
}
