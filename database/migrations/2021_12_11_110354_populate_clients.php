<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateClients extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
DB::statement("
INSERT INTO clients (first_name, last_name) 
VALUES  ('Victoria','Gorceac'),    
        ('Ion','Uzun'),
        ('Dumitru','Munteanu'),
        ('Daniil','Bejenari'),
        ('Olga','Covali'),
        ('Daniel','Cretu'); 
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
DELETE FROM `clients`;
");
}
}