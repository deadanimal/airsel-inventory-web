<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_requests', function (Blueprint $table) {
            $table->id();
            $table->string('organization_code')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('movement_request_number')->nullable();
            $table->string('movement_request_type')->nullable();
            $table->string('description')->nullable();
            $table->string('required_date')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('status')->nullable();
            $table->string('source_inventory')->nullable();
            $table->string('source_locator')->nullable();
            $table->string('destination_inventory')->nullable();
            $table->string('destination_locator')->nullable();
            $table->string('destination_action')->nullable();
            $table->string('dst_segment1')->nullable();
            $table->string('dst_segment2')->nullable();
            $table->string('dst_segment3')->nullable();
            $table->string('dst_segment4')->nullable();
            $table->string('dst_segment5')->nullable();
            $table->string('dst_segment6')->nullable();
            $table->string('dst_segment7')->nullable();
            $table->string('line_number')->nullable();
            $table->string('item')->nullable();
            $table->string('requested_quantity')->nullable();
            $table->string('uom_name')->nullable();
            $table->string('created_by')->nullable();
            $table->string('last_updated_date')->nullable();
            $table->string('destination_account_id')->nullable();
            $table->foreignId('inventory_id')->nullable();
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
        Schema::dropIfExists('material_requests');
    }
}
