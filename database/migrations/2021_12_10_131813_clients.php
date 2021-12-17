<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `clients` (
              `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
              `membership_id` BIGINT UNSIGNED NULL,
              `first_name` VARCHAR (20) NOT NULL,
              `last_name` VARCHAR (20) NOT NULL,
              `start_time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
              `end_time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
               PRIMARY KEY (`id`),
               FOREIGN KEY(`membership_id`) REFERENCES `membership`(`id`)
               ON UPDATE CASCADE); 
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
          DROP TABLE `clients`
        ");
    }
}
