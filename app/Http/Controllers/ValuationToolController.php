<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Valuation;
use App\Models\ValuationDetails;

class ValuationToolController extends Controller
{
    //
    function valuationTool(){
        return view('valToolPage.valTool');
    }

    public function saveHeader_Valuation(Request $request)
    {
        $value = new Valuation;
        $value->first_year = $request->first_year;
        $value->last_year = $request->first_year + 4;
        $value->sales_revenue = $request->sales_revenue;
        $value->net_profit = $request->net_profit;
        $value->cost_equity = $request->cost_equity;
        $value->growth_rate = $request->growth_rate;
        $value->current_assets = $request->current_assets;
        $value->current_liabilities = $request->current_liabilities;
        $value->working_capital = $request->working_capital;
        $value->depreciation_exist_assets = $request->depreciation_exist_assets;
        $value->depreciation_rate = $request->depreciation_rate;
        $value->save();

        $id = $value->id;
        return view('valToolPage.valToolDetail', ['id' => $id]);
    }

    public function add_new($id)
    {
        return view('valToolPage.valToolDetail', ['id' => $id]);
    }

    public function addDetails_Valution(Request $request)
    {
        
        //$value = Valuation::find($id);
        for ($i=0; $i <5 ; $i++) { 
            $val_details = new ValuationDetails;
            $val_details->valuation_id = $request->id;
            $val_details->name_year = 1;
            $val_details->n_year = $i;
            $val_details->n_sales_forecast = 0;
            $val_details->n_profit_forecast = 0;
            $val_details->n_current_assets = 0;
            $val_details->n_current_liabilities = 0;
            $val_details->n_working_capital = 0;
            $val_details->n_change_working_capital = 0;
            $val_details->n_depreciation_exist_assets = 0;
            $val_details->n_purchase_new_assets = 0;
            $val_details->n_depreciation_new_assets = 0;
            $val_details->n_loans_returned = 0;
            $val_details->n_new_loan = 0;
            $val_details->n_seller_discretionary_expend = 0;
            $val_details->n_cash_flow_fcfe = 0;
            $val_details->n_pv_fcfe = 0;
            $val_details->save();
        }
        
        // for ($i=0; $i <5 ; $i++) { 
            
        // }
        return "success";
        
    }


}
