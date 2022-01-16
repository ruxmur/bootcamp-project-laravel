<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class WorkoutTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        DB::statement("
            CREATE TABLE workout_types(
               `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
               `name` VARCHAR (50) UNIQUE NOT NULL,
                PRIMARY KEY (`id`) );
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() 
    {
        DB::statement("
           DROP TABLE `workout_types`
        ");
    }
}
