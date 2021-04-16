<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name,
            'subtitulo' => $this->faker->name,
            'conteudo' => $this->faker->text(),
            'tag' => $this->faker->words(5,true),
            'slug' => $this->faker->slug(),
        ];
    }
}
