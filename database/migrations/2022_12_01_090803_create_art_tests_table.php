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
        Schema::create('art_tests', function (Blueprint $table) {
            $table->id();
            $table->string("test_name");
            $table->date("start_date");
            $table->date("end_date");
            $table->integer("test_status");
            $table->string("file")->nullable();
            $table->integer("mesu_id")->nullable();
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
        Schema::dropIfExists('art_tests');
    }
};
