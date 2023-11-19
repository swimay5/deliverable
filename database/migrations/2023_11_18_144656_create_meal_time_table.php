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
        Schema::create('meal_time', function (Blueprint $table) {
            $table->id();
            $table->integer('breakfast')->nullable();
            $table->integer('lunch')->nullable();
            $table->integer('dinner')->nullable();
            $table->integer('snack')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_time');
    }
};
