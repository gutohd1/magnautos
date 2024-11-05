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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('make_id');
            $table->string('model');
            $table->string('reg');
            $table->integer('type');
            $table->integer('year');
            $table->integer('year_model');
            $table->integer('odometer');
            $table->foreignId('fuel_id');
            $table->integer('engine');
            $table->integer('power');
            $table->foreignId('gearbox_id');
            $table->integer('seats');
            $table->integer('doors');
            $table->string('colour');
            $table->text('description');
            $table->float('price', 9,2);
            $table->float('old_price', 9,2)->nullable();
            $table->integer('featured');
            $table->timestamps();

            $table->index(['id']);
            $table->foreign('make_id')->references('id')->on('make');
            $table->foreign('fuel_id')->references('id')->on('fuel');
            $table->foreign('gearbox_id')->references('id')->on('gearbox');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
