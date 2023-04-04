<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateTypesTable extends Migration
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
		Schema::create('types', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->bigInteger('brand_id')->unsigned()->index()->nullable();
			$table->foreign('brand_id')->references('id')->on('brands');		
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
	Schema::dropIfExists('types');
	//End craft placeholder #3
    }
}

// EOF