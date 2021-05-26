<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
        ];
    }

}
