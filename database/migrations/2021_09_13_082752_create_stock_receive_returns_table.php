<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockReceiveReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_receive_returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grn_id')->nullable();            
            $table->foreignId('purchase_order_id')->nullable();  
            $table->foreignId('employee_id')->nullable();  
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
        Schema::dropIfExists('stock_receive_returns');
    }
}
