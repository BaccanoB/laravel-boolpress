<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<= 10; $i++){

            $newPost = new Post;
            $newPost->title="Articolo n".$i;
            $newPost->slug= Str::slug($newPost->title,'-');
            $newPost->body=" Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt repellat excepturi explicabo nulla delectus possimus. Maiores eum fugiat dolores autem quae culpa ad sit minima, expedita harum atque unde eveniet ducimus aut eaque architecto ea tenetur soluta maxime optio nemo sed praesentium. Dignissimos magni corrupti officia, consequatur beatae sit voluptatibus quis perspiciatis, odio est quae voluptatem, quod dolore commodi. Dolor, minima laboriosam! Ut fugiat incidunt enim aperiam maxime placeat exercitationem repellendus? In laboriosam nostrum ducimus sequi dolorum. Odio, vel eius.";

            $newPost->save();
        }


    }
}
