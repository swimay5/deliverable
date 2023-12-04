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
        Schema::create('symptoms', function (Blueprint $table) {
            $table->id();
            $table->boolean('fever')->default(false)->nullable()->constrained();
            $table->boolean('headache')->default(false)->nullable()->constrained();
            $table->boolean('stomach_ache')->default(false)->nullable()->constrained();
            $table->boolean('neck_pain')->default(false)->nullable()->constrained();
            $table->boolean('shoulder_pain')->default(false)->nullable()->constrained();
            $table->boolean('elbow_pain')->default(false)->nullable()->constrained();
            $table->boolean('waist_pain')->default(false)->nullable()->constrained();
            $table->boolean('knee_pain')->default(false)->nullable()->constrained();
            $table->boolean('ankle_pain')->default(false)->nullable()->constrained();
            $table->boolean('wrist_pain')->default(false)->nullable()->constrained();
            $table->boolean('menstruation')->default(false)->nullable()->constrained();
            $table->string('others')->nullable()->constrained();
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
        Schema::dropIfExists('symptoms');
    }
};
