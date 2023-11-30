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
                $table->string('userID',255);
                $table->string('LastName',255);
                $table->string('FirstName',255);
                $table->string('userName',255);
                $table->string('userPassword',255);
                $table->string('Address',255);
                $table->string('City',255);
                $table->string('cep',255);
                $table->timestamps();
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
