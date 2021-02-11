<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-12 col-md-offset-4">
                <h4> User Login</h4>
                <hr>
                <form action="{{ route('valToolPage.valToolDetail')}}" method="POST" id="">
                    @csrf
                    <input type="text" name="id" value="{{ $id }}">
                    <div class="row">
                        <div class="form-group">
                            <label for="n_purchase_new_assets_[1]">Purchase of new fixed assets 1</label>
                            <input type="number" name="n_purchase_new_assets_[1]" id="" class="form-control">
                            <span class="text-danger error-text n_purchase_new_assets1_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_purchase_new_assets_[2]">Purchase of new fixed assets 2</label>
                            <input type="number" name="n_purchase_new_assets_[2]" id="" class="form-control">
                            <span class="text-danger error-text n_purchase_new_assets2_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_purchase_new_assets_[3]">Purchase of new fixed assets 3</label>
                            <input type="number" name="n_purchase_new_assets_[3]" id="" class="form-control">
                            <span class="text-danger error-text n_purchase_new_assets3_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_purchase_new_assets_[4]">Purchase of new fixed assets 4</label>
                            <input type="number" name="n_purchase_new_assets_[4]" id="" class="form-control">
                            <span class="text-danger error-text n_purchase_new_assets4_error"></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group">
                            <label for="n_depreciation_new_assets_[1]">Depreciation on [new] assets 2</label>
                            <input type="number" name="n_depreciation_new_assets_[1]" id="" class="form-control">
                            <span class="text-danger error-text n_depreciation_new_assets1_error"></span>
                        </div>
    
                        <div class="form-group">
                            <label for="n_depreciation_new_assets_[2]">Depreciation on [new] assets 2</label>
                            <input type="number" name="n_depreciation_new_assets_[2]" id="" class="form-control">
                            <span class="text-danger error-text n_depreciation_new_assets2_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_depreciation_new_assets_[3]">Depreciation on [new] assets 3</label>
                            <input type="number" name="n_depreciation_new_assets_[3]" id="" class="form-control">
                            <span class="text-danger error-text n_depreciation_new_assets3_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_depreciation_new_assets_[4]">Depreciation on [new] assets 4</label>
                            <input type="number" name="n_depreciation_new_assets_[4]" id="" class="form-control">
                            <span class="text-danger error-text n_depreciation_new_assets4_error"></span>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="form-group">
                            <label for="n_loans_returned_[1]">Loans returned 1</label>
                            <input type="number" name="n_loans_returned_[1]" id="" class="form-control">
                            <span class="text-danger error-text n_loans_returned1_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="n_loans_returned_[2]">Loans returned 2</label>
                            <input type="number" name="n_loans_returned_[2]" id="" class="form-control">
                            <span class="text-danger error-text n_loans_returned2_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="n_loans_returned_[3]">Loans returned 3</label>
                            <input type="number" name="n_loans_returned_[3]" id="" class="form-control">
                            <span class="text-danger error-text n_loans_returned3_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="n_loans_returned_[4]">Loans returned 4</label>
                            <input type="number" name="n_loans_returned_[4]" id="" class="form-control">
                            <span class="text-danger error-text n_loans_returned4_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="n_new_loan_[1]">New Loans Taken 1</label>
                            <input type="number" name="n_new_loan_[1]" id="" class="form-control">
                            <span class="text-danger error-text n_new_loan1_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="n_new_loan_[2]">New Loans Taken 2</label>
                            <input type="number" name="n_new_loan_[2]" id="" class="form-control">
                            <span class="text-danger error-text n_new_loan2_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="n_new_loan_[3]">New Loans Taken 3</label>
                            <input type="number" name="n_new_loan_[3]" id="" class="form-control">
                            <span class="text-danger error-text n_new_loan3_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="n_new_loan_[4]">New Loans Taken 4</label>
                            <input type="number" name="n_new_loan_[4]" id="" class="form-control">
                            <span class="text-danger error-text n_new_loan4_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="n_seller_discretionary_expend_[1]">Seller discreationary expenditure 1</label>
                            <input type="number" name="n_seller_discretionary_expend_[1]" id="" class="form-control">
                            <span class="text-danger error-text n_seller_discretionary_expend1_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_seller_discretionary_expend_[2]">Seller discreationary expenditure 2</label>
                            <input type="number" name="n_seller_discretionary_expend_[2]" id="" class="form-control">
                            <span class="text-danger error-text n_seller_discretionary_expend2_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_seller_discretionary_expend_[3]">Seller discreationary expenditure 3</label>
                            <input type="number" name="n_seller_discretionary_expend_[3]" id="" class="form-control">
                            <span class="text-danger error-text n_seller_discretionary_expend3_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="n_seller_discretionary_expend_[4]">Seller discreationary expenditure 4</label>
                            <input type="number" name="n_seller_discretionary_expend_[4]" id="" class="form-control">
                            <span class="text-danger error-text n_seller_discretionary_expend4_error"></span>
                        </div>
                    </div> <br>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>