<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['black', 'white', 'orange', 'yellow', 'striped', 'doted'];

        foreach($tags as $tag) {
            Tag::factory()->create(['name' => $tag]);
        }
    }
}
