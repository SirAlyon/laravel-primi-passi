<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Laravel', 'PHP', 'CSS', 'JS', 'VueJS', 'Phyton', 'HTML', 'MySQL'];
        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->save();
        }
    }
}
