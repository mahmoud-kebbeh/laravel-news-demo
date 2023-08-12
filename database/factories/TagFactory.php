<?php

declare(strict_types=1);

namespace Database\Factories;


use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends Factory<\App\Models\Tag>
 */
final class TagFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Tag::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
    		$name = ucwords(fake()->unique()->word);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
