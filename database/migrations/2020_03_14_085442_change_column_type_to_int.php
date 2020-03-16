<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnTypeToInt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_data', function (Blueprint $table) {
            $table->integer('user_id')->change();
            $table->integer('movie_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_data', function (Blueprint $table) {
            $table->string('user_id')->change();
            $table->string('movie_id')->change();
        });
    }
}
