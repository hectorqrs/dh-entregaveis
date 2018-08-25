<?php

use Illuminate\Database\Seeder;
use App\Director;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // $directors = factory(Director::class,10)->create();
        //
        // foreach($directors as $director){
        //   factory(Movie::class,5)->create([
        //     'director_id' => $director->id
        //   ]);

          $this->call(actorSeeder::class);
    }
}
