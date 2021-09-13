<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('PO_number')->nullable();
            $table->string('change_order_num')->nullable();
            $table->string('change_order_status')->nullable();
            $table->string('description')->nullable();
            $table->string('procurement_bu')->nullable();
            $table->string('sold_to_le_name')->nullable();
            $table->string('buyer')->nullable();
            $table->string('supplier_number')->nullable();
            $table->string('supplier_site_code')->nullable();
            $table->string('address_name')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('con_first_name')->nullable();
            $table->string('con_last_name')->nullable();
            $table->string('con_email_address')->nullable();
            $table->string('con_mobile_number')->nullable();
            $table->string('con_phone_number')->nullable();
            $table->string('supplier_contact_name')->nullable();
            $table->string('line_number')->nullable();
            $table->string('sch_number')->nullable();
            $table->string('dist_number')->nullable();
            $table->string('line_desc')->nullable();
            $table->string('order_qty')->nullable();
            $table->string('uom_code')->nullable();
            $table->string('order_qty_base')->nullable();
            $table->string('base_uom_code')->nullable();
            $table->string('requested_date')->nullable();
            $table->string('ship_to_org_code')->nullable();
            $table->string('subinv_code')->nullable();
            $table->string('ship_loc_code')->nullable();
            $table->string('line_type')->nullable();
            $table->string('line_status')->nullable();
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
        Schema::dropIfExists('purchase_orders');
    }
}
