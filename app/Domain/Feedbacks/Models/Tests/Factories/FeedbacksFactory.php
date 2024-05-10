<?php

namespace App\Domain\Feedbacks\Models\Tests\Factories;

use App\Domain\Feedbacks\Models\Feedbacks;
use Ensi\LaravelTestFactories\BaseModelFactory;

class FeedbacksFactory extends BaseModelFactory
{
    protected $model = Feedbacks::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'body' => $this->faker->text(),
        ];
    }
}