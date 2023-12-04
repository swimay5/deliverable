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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('wake_up_time')->nullable()->constrained();
            $table->integer('bed_time')->nullable()->constrained();
            $table->integer('body_temperature')->nullable()->constrained();
            $table->integer('weight')->nullable()->constrained();
            $table->integer('subjective_score')->nullable()->constrained();
            $table->text('comment')->nullable()->constrained();
            $table->foreignId('symptom_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('conditions');
    }
};
