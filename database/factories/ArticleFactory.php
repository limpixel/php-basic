<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    
    protected $model = Article::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => strtolower(str_replace(' ', '-', $this->faker->name())),
        ];
    }
}
