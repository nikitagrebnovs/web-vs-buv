<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postfactory extends Factory
{

    protected $model = Post::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];



    }
}
