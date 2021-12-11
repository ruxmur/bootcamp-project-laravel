<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateMembership extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
DB::statement("
INSERT INTO `membership`(name, types, duration, price, price_lei) 
VALUES ('Trial','1_month', '1 month','50','1000'),
('Standart','1_year','12 month','550','11000'),
('Premium','VIP','36 month','1500','30000'),
('Not active','Deactivated','3 month','0','0'); 
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
DELETE FROM `membership`;
");
}
}