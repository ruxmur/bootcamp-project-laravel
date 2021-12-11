<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateAboutClients extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
DB::statement("
INSERT INTO `about_clients` 
VALUES 
 (01,'brinza.misha1@gmail.com','+37360400200', 'F','165','50','22'),
 (02,'uzun.ion.pavel@gmail.com','+37379555333', 'M','174','60','26'),
 (03,'gennadiysinigur@gmail.com','+37369880774', 'M','170','65','28'),
 (04,'help2022help@bk.ru','+37368452452', 'M','175','66','27'),
 (05,'olgacovali1011@gmail.com','+37378456456', 'F','168','52','24'),
 (06,'danielcretu1998@gmail.com','+37370111333', 'M','180','70','24');
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
DELETE FROM `about_clients`;
");
}
}