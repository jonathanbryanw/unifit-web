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
        Schema::create('workoutdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_id')->default(1);
            $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
            $table->integer('session');
            $table->string('title');
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
        Schema::dropIfExists('workoutdetails');
    }
};
