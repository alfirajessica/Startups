<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuations', function (Blueprint $table) {
            $table->id();
            $table->integer('first_year'); //tahun ke-1
            $table->integer('last_year'); //tahun ke-5
            $table->integer('sales_revenue');
            $table->integer('net_profit');
            $table->integer('cost_equity');
            $table->integer('growth_rate');
            $table->integer('current_assets');
            $table->integer('current_liabilities');
            $table->integer('working_capital');
            $table->integer('depreciation_exist_assets');
            $table->integer('depreciation_rate');
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
        Schema::dropIfExists('valuations');
    }
}
