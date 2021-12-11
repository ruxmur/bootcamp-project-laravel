<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateWorkoutTypes extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
DB::statement("
INSERT INTO `workout_types`
VALUES 
 (1,'Aerobic_exercise'),
 (2,'Box'),
 (3,'Cardio'),
 (4,'CrossFit'),
 (5,'Stretching'),
 (6,'Strenght_training'),
 (7,'Yoga');
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
DELETE FROM `workout_types`;
");
}
}