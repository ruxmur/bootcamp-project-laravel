<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMembershipTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::statement("
      CREATE TABLE `membership` (
        `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        `name` VARCHAR (50) NOT NULL,
        `types` VARCHAR (50) NOT NULL,
        `duration` VARCHAR (50) NOT NULL,
        `price` FLOAT NOT NULL,
        PRIMARY KEY (`id`));
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
      DROP TABLE `membership`
    ");
  }
}
