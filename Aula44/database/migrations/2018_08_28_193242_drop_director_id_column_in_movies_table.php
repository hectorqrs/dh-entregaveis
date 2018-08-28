<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropDirectorIdColumnInMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign(['director_id']);

            $table->dropColumn('director_id');

        Schema::enableForeignKeyConstraints();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('movies', function (Blueprint $table) {
          $table->integer('director_id')->unsigned()->unique();

          $table->foreign('director_id')->references('id')->on('directors');
        });

        Schema::enableForeignKeyConstraints();
    }
}
