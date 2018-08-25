<?php

use Illuminate\Database\Seeder;
use App\Movie;

class movieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class)->times(50)->create();
    }
}
