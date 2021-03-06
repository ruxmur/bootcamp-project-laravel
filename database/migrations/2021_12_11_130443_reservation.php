<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        DB::statement("
            CREATE TABLE `reservation` (
                `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
                `client_id` BIGINT UNSIGNED NOT NULL,
                `workout_type_id` BIGINT UNSIGNED NOT NULL,
                `coach_id` BIGINT UNSIGNED NOT NULL,
                `start_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `end_time` DATETIME NOT NULL,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`)
                ON UPDATE CASCADE
                ON DELETE CASCADE,
                FOREIGN KEY (`workout_type_id`) REFERENCES `workout_types`(`id`)
                ON UPDATE CASCADE
                ON DELETE CASCADE,
                FOREIGN KEY (`coach_id`) REFERENCES `coaches`(`id`)
                ON UPDATE CASCADE
                ON DELETE CASCADE);
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
            DROP TABLE `reservation`
        ");
    }
}
