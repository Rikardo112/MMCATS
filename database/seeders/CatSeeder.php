<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = Cat::factory(50)->create();

        foreach($cats as $cat) {
            $tag = Tag::inRandomOrder()->first();
            $cat->tags()->attach($tag->id);
        }
    }
}
