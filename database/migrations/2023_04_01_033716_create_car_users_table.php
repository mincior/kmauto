<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Begin craft placeholder #1
            $table->string('observatii')->nullable();
			$table->bigInteger('interval_id')->unsigned()->index()->nullable();
			$table->foreign('interval_id')->references('id')->on('intervals');
			$table->bigInteger('user_id')->unsigned()->index()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('car_users');
    }
}
