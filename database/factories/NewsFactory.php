<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\News>
 */
final class NewsFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = News::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 10),
            'title' => rtrim(fake()->realText($maxNbChars = 16, $indexSize = 2), '.'),
            'content' => fake()->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
            'is_published' => (rand(1, 10) > 2),
            'publish_date' => fake()->dateTimeBetween('2023-07-11 00:00:00', '2023-08-11 00:00:00'),
        ];
    }
}
