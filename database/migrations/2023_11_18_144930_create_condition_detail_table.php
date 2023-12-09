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
        Schema::create('condition_detail', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable()->constrained();
            $table->string('movie')->nullable()->constrained();
            $table->string('document')->nullable()->constrained();
            $table->text('comment')->nullable()->constrained();
            $table->foreignId('condition_id')->nullable()->constrained();
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
        Schema::dropIfExists('condition_detail');
    }
};
