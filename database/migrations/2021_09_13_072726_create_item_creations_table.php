<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCreationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_creations', function (Blueprint $table) {
            $table->id();
            $table->string('item_number')->nullable();
            $table->string('organization_code')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('item_class')->nullable();
            $table->string('item_class_description')->nullable();
            $table->string('legal_identity_code')->nullable();
            $table->string('legal_identity_name')->nullable();
            $table->string('short_description')->nullable();
            $table->string('long_description')->nullable();
            $table->string('primary_uom_code')->nullable();
            $table->string('primary_uom')->nullable();
            $table->string('secondary_uom_code')->nullable();
            $table->string('secondary_uom')->nullable();
            $table->string('item_status')->nullable();
            $table->string('catalog')->nullable();
            $table->string('category')->nullable();
            $table->string('minimum_qty')->nullable();
            $table->string('maximum_qty')->nullable();
            $table->string('inventory_item')->nullable();
            $table->string('transfer_order')->nullable();
            $table->string('purchaseable_item')->nullable();
            $table->string('shippable_item')->nullable();
            //.$table->foreignId('inventory_id')->nullable();
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
        Schema::dropIfExists('item_creations');
    }
}
