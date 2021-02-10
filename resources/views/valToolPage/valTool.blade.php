<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-12 col-md-offset-4">
                <h4> User Login</h4>
                <hr>
                <form action="{{ route('valToolPage.valTool')}}" method="POST" id="">
                @csrf
                    <div class="form-group">
                        <label for="first_year">First Year</label>
                        <input type="number" name="first_year" id="" class="form-control" >
                        <span class="text-danger error-text first_year_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="sales_revenue">Sales Revenue</label>
                        <input type="number" name="sales_revenue" id="" class="form-control" >
                        <span class="text-danger error-text sales_revenue_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="net_profit">Net Profit</label>
                        <input type="number" name="net_profit" id="" class="form-control">
                        <span class="text-danger error-text net_profit_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="cost_equity">Cost of Equity</label>
                        <input type="number" name="cost_equity" id="" class="form-control">
                        <span class="text-danger error-text cost_equity_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="growth_rate">Growth Rate</label>
                        <input type="number" name="growth_rate" id="" class="form-control">
                        <span class="text-danger error-text growth_rate_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="current_assets">Current Assets</label>
                        <input type="number" name="current_assets" id="" class="form-control">
                        <span class="text-danger error-text current_assets_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="current_liabilities">Current Liabilities</label>
                        <input type="number" name="current_liabilities" id="" class="form-control">
                        <span class="text-danger error-text current_liabilities_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="working_capital">Working Capital</label>
                        <input type="number" name="working_capital" id="" class="form-control">
                        <span class="text-danger error-text working_capital_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="depreciation_exist_assets">Depreciation on existing assets</label>
                        <input type="number" name="depreciation_exist_assets" id="" class="form-control">
                        <span class="text-danger error-text depreciation_exist_assets_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="depreciation_rate">Depreciation rate</label>
                        <input type="number" name="depreciation_rate" id="" class="form-control">
                        <span class="text-danger error-text depreciation_rate_error"></span>
                    </div>
                    <div class="form-group">
                      <button type="submit">Save</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>