<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateMonthsTable extends Migration
//End craft placeholder #1
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Begin craft placeholder #2
		Schema::create('months', function (Blueprint $table) {
			$table->id();
			$table->date('data_raportarii');
			$table->string('anul_luna');		
			$table->boolean('select')->default(0);
			$table->boolean('inchisa')->default(0);		
		//End craft placeholder #2
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    //Begin craft placeholder #3
	Schema::dropIfExists('months');
	//End craft placeholder #3
    }
}

// EOF