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
        $value->total_pv_fcfe = 0;
        $value->terminal_value = 0;
        $value->pv_terminal_value = 0;
        $value->business_value = 0;
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
        $value = DB::table('valuations')->find($request->id);
        $total_pv_fcfe=0;
        $terminal_value=0;
        for ($i=0; $i <5 ; $i++) { 
            $val_details = new ValuationDetails;
            $val_details->valuation_id = $value->id;
            $val_details->name_year = $value->first_year + $i;
            $val_details->n_year = $i+1;
            
            if ($i == 0) {
                $val_details->n_sales_forecast = $value->sales_revenue;
                $val_details->n_profit_forecast = $value->net_profit;
                $val_details->n_current_assets = $value->current_assets;
                $val_details->n_current_liabilities = $value->current_liabilities;
                $val_details->n_working_capital = $value->working_capital;
               
                $val_details->n_purchase_new_assets = 0;
                $val_details->n_depreciation_new_assets = 0;
                $val_details->n_loans_returned = 0;
                $val_details->n_new_loan = 0;
                $val_details->n_seller_discretionary_expend = 0;
            
                $val_details->n_change_working_capital = 0;
                $val_details->n_seller_discretionary_expend = 0;
                $val_details->n_cash_flow_fcfe = 0;
                $val_details->n_pv_fcfe = 0;
                

            }else{

                $val_details->n_sales_forecast = $value->sales_revenue + ($value->sales_revenue * $value->growth_rate/100);
                $val_details->n_profit_forecast = $value->net_profit + ($value->net_profit * $value->growth_rate/100);
                $val_details->n_current_assets = $value->current_assets + ($value->current_assets * $value->growth_rate/100);
                $val_details->n_current_liabilities = $value->current_liabilities + ($value->current_liabilities * $value->growth_rate/100);
                $val_details->n_working_capital = $value->working_capital + ($value->working_capital * $value->growth_rate/100);
                
                $val_details->n_change_working_capital = ($value->working_capital + ($value->working_capital * $value->growth_rate/100))-$value->working_capital;

                $profit = $value->net_profit + ($value->net_profit * $value->growth_rate/100); 
                $changein = ($value->working_capital + ($value->working_capital * $value->growth_rate/100))-$value->working_capital;
                $depExtAsset = $value->depreciation_exist_assets;
                $purNewAsset = $request->n_purchase_new_assets_[$i];
                $depNewAsset =  $request->n_depreciation_new_assets_[$i];
                $loanre = $request->n_loans_returned_[$i];
                $newLoan = $request->n_new_loan_[$i];
                $sde = $request->n_seller_discretionary_expend_[$i];

                $val_details->n_purchase_new_assets = $purNewAsset;
                $val_details->n_depreciation_new_assets = $depNewAsset;
                $val_details->n_loans_returned = $loanre;
                $val_details->n_new_loan = $newLoan;
                $val_details->n_seller_discretionary_expend = $sde;
            
                $val_details->n_cash_flow_fcfe = $profit - $changein + $depExtAsset - $purNewAsset + $depNewAsset - $loanre + $newLoan + $sde;
                $val_details->n_pv_fcfe = ($profit - $changein + $depExtAsset - $purNewAsset + $depNewAsset - $loanre + $newLoan + $sde)/pow(1+$value->cost_equity/100, $i);

                $total_pv_fcfe = $value->total_pv_fcfe + ($profit - $changein + $depExtAsset - $purNewAsset + $depNewAsset - $loanre + $newLoan + $sde)/pow(1+$value->cost_equity/100, $i);
                $terminal_value = ($profit - $changein + $depExtAsset - $purNewAsset + $depNewAsset - $loanre + $newLoan + $sde)*((1-(1/ pow(1+$value->cost_equity/100, $i))/$value->cost_equity/100));
                $value->pv_terminal_value = $value->terminal_value/pow(1+$value->cost_equity/100, $i);
                $value->business_value = $value->total_pv_fcfe + $value->pv_terminal_value;

                $value->sales_revenue = $value->sales_revenue + ($value->sales_revenue * $value->growth_rate/100);
                $value->net_profit = $value->net_profit + ($value->net_profit * $value->growth_rate/100);
                $value->current_assets = $value->current_assets + ($value->current_assets * $value->growth_rate/100);
                $value->current_liabilities = $value->current_liabilities + ($value->current_liabilities * $value->growth_rate/100);
                $value->working_capital = $value->working_capital + ($value->working_capital * $value->growth_rate/100);
                $value->total_pv_fcfe = $value->total_pv_fcfe + ($profit - $changein + $depExtAsset - $purNewAsset + $depNewAsset - $loanre + $newLoan + $sde)/pow(1+$value->cost_equity/100, $i);
            
                
            }
            
            DB::table('valuations')->where('id', $value->id)->update(['total_pv_fcfe' => $total_pv_fcfe],
            ['terminal_value' => $terminal_value]);
            $val_details->save();

        }
        
        return "success";
        
    }


}
