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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
			$table->string('Name');
			$table->string('Email');
			$table->string('Password');
			$table->string('Mobile');
			$table->string('Address');
			$table->string('Gender');
			$table->string('file');
			
			$table->unsignedBigInteger('R_id');
			$table->foreign('R_id')->references('R_id')->on('roles');
			$table->enum('status',['Approved','Pending'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
