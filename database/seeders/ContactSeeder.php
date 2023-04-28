<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ {
    User,
    Contact,
    Post
};

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Pavinder',
        //     'email'=> 'pavi@testmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // Contact::create([
        //     'phone' => '234567543',
        //     'address'=> 'New walk street 123',
        //     'user_id' => 1
        // ]);

        User::factory(10)->create();
        Post::factory()->count(50)->create();
    }
}
