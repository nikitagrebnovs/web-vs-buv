<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamFactory extends Factory
{

    protected $model = Team::class;

    public function definition()
    {
        return [
        'name' => $this->faker->name,
        'size' => 5,
        ];



    }
}
