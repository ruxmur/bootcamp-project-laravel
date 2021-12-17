<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::table('coaches', function (Blueprint $table) {
            $table->string('address', 225)->change();
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
        Schema::table('coaches', function (Blueprint $table){
           $table->string('address', 25);
        });
    }
}
