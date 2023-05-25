<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100);
			$table->string('email', 100);
            $table->timestamp('email_verified_at')->nullable();
			$table->string('password')->nullable();
			$table->string('telefon', 100)->nullable();
			$table->integer('limita_km')->default(20)->nullable();
			$table->string('observatii', 250)->nullable();
            $table->boolean('is_admin')->default(0);
			$table->boolean('is_depadmin')->default(0);
			$table->integer('calificativ')->nullable();
            $table->string('functie')->nullable();		
            $table->string('culoare', 10)->default('#000')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
