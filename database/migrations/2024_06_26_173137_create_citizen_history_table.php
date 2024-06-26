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
        Schema::create('citizen_history', function (Blueprint $table) {
            $table->id('citizen_history_id');
            $table->unsignedBigInteger('citizen_id');
            $table->unsignedBigInteger('diagnostic_id');
            $table->date('event_date');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('citizen_id')->references('id')->on('citizen_details')->onDelete('cascade');
            $table->foreign('diagnostic_id')->references('id')->on('diagnostics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizen_history');
    }
};
