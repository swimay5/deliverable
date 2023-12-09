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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time')->nullable()->constrained();
            $table->string('red_ingredient')->nullable()->constrained();
            $table->string('yellow_ingredient')->nullable()->constrained();
            $table->string('green_ingredient')->nullable()->constrained();
            $table->string('comment')->nullable()->constrained();
            $table->foreignId('meal_time_id')->nullable()->constrained('meal_time');
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
        Schema::dropIfExists('meals');
    }
};
