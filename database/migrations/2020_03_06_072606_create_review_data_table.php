<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('movie_id');
            $table->string('title', 20);
            $table->integer('total');
            $table->integer('happy');
            $table->integer('excited');
            $table->integer('funny');
            $table->integer('sad');
            $table->integer('disguesting');
            $table->integer('scary');
            $table->string('body', 300);
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
        Schema::dropIfExists('review_data');
    }
}
