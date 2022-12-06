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
        Schema::create('decelerations', function (Blueprint $table) {
            $table->id();
            $table->string("therapist_name");
            $table->string("therapist_code");
            $table->string("question_one")->nullable();
            $table->string("question_two")->nullable();
            $table->integer("status");
            $table->string("start_date");
            $table->string("end_date");
            $table->integer("user_id")->nullable();

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
        Schema::dropIfExists('decelerations');
    }
};
