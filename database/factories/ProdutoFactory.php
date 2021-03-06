<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name,
            'descricao' => $this->faker->text(200),
            'tag' => $this->faker->words(5,true),
            'preco' => $this->faker->randomFloat(2),
            'slug' => $this->faker->slug(),
            'relacionados' => json_encode([
                rand(1,50),
                rand(1,50),
                rand(1,50),
                rand(1,50),
                rand(1,50),
                rand(1,50),
                rand(1,50),
            ]),
        ];
    }
}
