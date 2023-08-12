<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    	  $tags = \App\Models\Tag::factory(10)->create();

				\App\Models\Category::factory(10)->create()->each(function($category) use($tags) {
				  $newsItems = \App\Models\News::factory(rand(1, 4))->create([
				    'category_id' => ($category->id + (rand(11, 100) % (11 - $category->id))),
				  ]);

				  $newsItems->each(function ($newsItem) use ($tags) {
				    $randomTags = $tags->random(rand(1, 3));
				    $newsItem->tags()->attach($randomTags);
				  });
				});

        // $categories = \App\Models\Category::all();

		    // $categories->each(function ($category) {
		    //     $category->news()->saveMany(
		    //         \App\Models\News::factory()->count(10)->create()
		    //     );
		    // });

        // \App\Models\News::factory(10)->create();
        \App\Models\Tag::factory(10)->create();

	    	// $this->call([
	      //     NewsSeeder::class,
	      //     CategorySeeder::class,
	      //     TagSeeder::class,
        // ]);
    }
}
