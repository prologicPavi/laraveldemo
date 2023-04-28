<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->paragraph(1),
            'description' => $this->faker->paragraph(3),
            'user_id' => \App\Models\User::all()->random(),
        ];
    }
}
