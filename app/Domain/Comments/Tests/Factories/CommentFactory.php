<?php

namespace App\Domain\Comments\Tests\Factories;

use App\Domain\Comments\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'author_id' => "author_" . $this->faker->numberBetween(1, 50),
            'text' => $this->faker->realTextBetween(50, 300),
            'post_code' => "post_" . $this->faker->numberBetween(1, 1000),
        ];
    }
}
