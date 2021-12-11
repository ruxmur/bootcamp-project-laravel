<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCoachesTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('coaches', function (Blueprint $table) {
$table->id();
$table->string('first_name', 255);
$table->string('last_name', 255);
$table->string('email', 255)->unique();
$table->string('phone_number', 255);
$table->string('address', 25);
$table->string('birthday');
$table->string('hobby');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('coaches');
}
}