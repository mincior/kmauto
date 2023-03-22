<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Begin craft placeholder #1
            $table->string('observatii', 200);
			$table->date('data')->nullable();
			$table->bigInteger('department_id')->unsigned()->index()->nullable();
			$table->foreign('department_id')->references('id')->on('departments');
			$table->bigInteger('car_id')->unsigned()->index()->nullable();
			$table->foreign('car_id')->references('id')->on('cars');

			//End craft placeholder #1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_departments');
    }
}
