<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Director;
use App\Actor;

class actorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directors = Director::all();

        $actors = factory(Actor::class,50)->create();
        $movies = factory(Movie::class,50)->create();

        foreach ($movies as $movie) {
         $movie->actors()->sync($actors->random(3));
         }
    }
}
