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
        Schema::create('weightdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id')->default(1);
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->double('weight');
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
        Schema::dropIfExists('weightdetails');
    }
};
