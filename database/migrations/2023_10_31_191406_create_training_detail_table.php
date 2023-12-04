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
        Schema::create('training_detail', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('movie')->nullable();
            $table->string('document')->nullable();
            $table->text('comment')->nullable()->constrained();
            $table->foreignId('training_id')->nullable()->constrained();
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
        Schema::dropIfExists('training_detail');
    }
};
