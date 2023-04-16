<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateFuelsTable extends Migration
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
		Schema::create('fuels', function (Blueprint $table) {
			$table->id();
			$table->string('name');		
		//End craft placeholder #2
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
	Schema::dropIfExists('fuels');
	//End craft placeholder #3
    }
}

// EOF