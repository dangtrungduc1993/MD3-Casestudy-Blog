<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'title'=>$this->faker->title,
            'content'=>$this->faker->text,
            'category_id'=>rand(1,4)
//            'user_id'=>rand(1,10)
        ];
    }
}
