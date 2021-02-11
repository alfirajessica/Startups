<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('valuation_id')->unsigned();
            $table->integer('name_year');
            $table->integer('n_year');
            $table->integer('n_sales_forecast');
            $table->integer('n_profit_forecast');
            $table->integer('n_current_assets');
            $table->integer('n_current_liabilities');
            $table->integer('n_working_capital');
            $table->integer('n_change_working_capital');
            $table->integer('n_purchase_new_assets');
            $table->integer('n_depreciation_new_assets');
            $table->integer('n_loans_returned');
            $table->integer('n_new_loan');
            $table->integer('n_seller_discretionary_expend');
            $table->integer('n_cash_flow_fcfe');
            $table->integer('n_pv_fcfe');
            $table->timestamps();
            $table->foreign('valuation_id')->references('id')->on('valuations')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valuation_details');
    }
}
