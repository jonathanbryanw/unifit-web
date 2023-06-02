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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id('TrainerID');
            $table->longText('TrainerDescription');
            $table->unsignedBigInteger('UserID')->default(1);
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->string('TrainerCategory');
            $table->string('TrainerImage');
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
        Schema::dropIfExists('trainers');
    }
};
