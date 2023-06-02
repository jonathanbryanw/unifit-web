<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->id('WorkoutID');
            $table->string('WorkoutName');
            $table->unsignedBigInteger('ProgramID')->default(1);
            $table->foreign('ProgramID')->references('ProgramID')->on('programs')->onDelete('cascade');
            $table->longText('WorkoutDescription');
            $table->string('WorkoutImage');
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
        Schema::dropIfExists('workouts');
    }
};
