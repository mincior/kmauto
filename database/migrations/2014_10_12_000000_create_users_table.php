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
			$table->boolean('activ', 1)->default('1')->nullable();		
            $table->boolean('is_admin', 1)->default(0);
			$table->string('calificativ', 250)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
