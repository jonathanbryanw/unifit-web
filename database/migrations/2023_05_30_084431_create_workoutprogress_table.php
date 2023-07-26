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
        Schema::create('workoutprogress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workoutdetail_id')->default(1);
            $table->foreign('workoutdetail_id')->references('id')->on('workoutdetails')->onDelete('cascade');
            $table->unsignedBigInteger('account_id')->default(1);
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('workoutprogress');
    }
};
