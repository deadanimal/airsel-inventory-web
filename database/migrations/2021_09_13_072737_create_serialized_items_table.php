<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerializedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serialized_items', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name')->nullable();
            $table->string('source_code')->nullable();
            $table->string('source_header_ID')->nullable();
            $table->string('source_line_ID')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('item_number')->nullable();
            $table->string('subinventory_code')->nullable();
            $table->string('locator_rack')->nullable();
            $table->string('locator_row')->nullable();
            $table->string('transaction_quantity')->nullable();
            $table->string('transaction_uom')->nullable();
            $table->string('transaction_type_name')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('dst_segment1')->nullable();
            $table->string('dst_segment2')->nullable();
            $table->string('dst_segment3')->nullable();
            $table->string('dst_segment4')->nullable();
            $table->string('dst_segment5')->nullable();
            $table->string('dst_segment6')->nullable();
            $table->string('dst_segment7')->nullable();
            $table->string('use_current_cost')->nullable();
            $table->string('transaction_cost_identifier')->nullable();
            $table->string('cost_component_code')->nullable();
            $table->string('cost')->nullable();
            $table->string('serial_num_identifier')->nullable();
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
        Schema::dropIfExists('serialized_items');
    }
}
