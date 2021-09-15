<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrnsTable extends Migration
{
    /**
     * Run the migrations._.baseUrl
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grns', function (Blueprint $table) {
            $table->id();
            $table->string('head_inter_number')->nullable();
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
        Schema::dropIfExists('grns');
    }
}
