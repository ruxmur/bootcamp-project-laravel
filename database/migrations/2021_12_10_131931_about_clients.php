<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AboutClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `about_clients` (
                    `client_id` BIGINT UNSIGNED NOT NULL,
                    `email` VARCHAR (255) UNIQUE KEY NOT NULL,
                    `phone_number` VARCHAR (20) NOT NULL,
                    `sex`VARCHAR (1) NOT NULL,
                    `hight` VARCHAR (10) NOT NULL,
                    `weight` VARCHAR (10) NOT NULL,
                    `age` VARCHAR (10) NOT NULL,
                    PRIMARY KEY (`client_id`),
                    UNIQUE INDEX `client_id_UNIQUE` (`client_id` ASC),
                    CONSTRAINT FK_about_clients_clients 
                    FOREIGN KEY(`client_id`) REFERENCES `clients`(`id`)
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
        DB::statement("DROP TABLE `about_clients`");
    }
}
