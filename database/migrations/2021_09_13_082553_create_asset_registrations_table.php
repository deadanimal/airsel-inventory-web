<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('asset_owning_department')->nullable();
            $table->string('asset_hierachy')->nullable();
            $table->string('asset_categorization')->nullable();
            $table->string('asset_grouping')->nullable();
            $table->string('asset_detail_description')->nullable();
            $table->string('asset_warranty_information')->nullable();
            $table->foreignId('item_creation_id')->nullable();
            $table->foreignId('serialized_item_id')->nullable();
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
        Schema::dropIfExists('asset_registrations');
    }
}
