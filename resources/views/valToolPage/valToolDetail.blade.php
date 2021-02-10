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
                            <label for="purchaseNewAsset1">Purchase of new fixed assets 1</label>
                            <input type="number" name="purchaseNewAsset1" id="" class="form-control">
                            <span class="text-danger error-text purchaseNewAsset1_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="purchaseNewAsset2">Purchase of new fixed assets 2</label>
                            <input type="number" name="purchaseNewAsset2" id="" class="form-control">
                            <span class="text-danger error-text purchaseNewAsset2_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="purchaseNewAsset3">Purchase of new fixed assets 3</label>
                            <input type="number" name="purchaseNewAsset3" id="" class="form-control">
                            <span class="text-danger error-text purchaseNewAsset3_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="purchaseNewAsset4">Purchase of new fixed assets 4</label>
                            <input type="number" name="purchaseNewAsset4" id="" class="form-control">
                            <span class="text-danger error-text purchaseNewAsset4_error"></span>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="depNewAsset">Depreciation on [new] assets</label>
                        <input type="number" name="depNewAsset" id="" class="form-control">
                        <span class="text-danger error-text depNewAsset_error"></span>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="loansRe1">Loans returned 1</label>
                            <input type="number" name="loansRe1" id="" class="form-control">
                            <span class="text-danger error-text loansRe1_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="loansRe2">Loans returned 2</label>
                            <input type="number" name="loansRe2" id="" class="form-control">
                            <span class="text-danger error-text loansRe2_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="loansRe3">Loans returned 3</label>
                            <input type="number" name="loansRe3" id="" class="form-control">
                            <span class="text-danger error-text loansRe3_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="loansRe4">Loans returned 4</label>
                            <input type="number" name="loansRe4" id="" class="form-control">
                            <span class="text-danger error-text loansRe4_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="newLoansTa1">New Loans Taken 1</label>
                            <input type="number" name="newLoansTa1" id="" class="form-control">
                            <span class="text-danger error-text newLoansTa1_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="newLoansTa2">New Loans Taken 2</label>
                            <input type="number" name="newLoansTa2" id="" class="form-control">
                            <span class="text-danger error-text newLoansTa2_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="newLoansTa3">New Loans Taken 3</label>
                            <input type="number" name="newLoansTa3" id="" class="form-control">
                            <span class="text-danger error-text newLoansTa3_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="newLoansTa4">New Loans Taken 4</label>
                            <input type="number" name="newLoansTa4" id="" class="form-control">
                            <span class="text-danger error-text newLoansTa4_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="selDisExp1">Seller discreationary expenditure 1</label>
                            <input type="number" name="selDisExp1" id="" class="form-control">
                            <span class="text-danger error-text selDisExp1_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="selDisExp2">Seller discreationary expenditure 2</label>
                            <input type="number" name="selDisExp2" id="" class="form-control">
                            <span class="text-danger error-text selDisExp2_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="selDisExp3">Seller discreationary expenditure 3</label>
                            <input type="number" name="selDisExp3" id="" class="form-control">
                            <span class="text-danger error-text selDisExp3_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="selDisExp4">Seller discreationary expenditure 4</label>
                            <input type="number" name="selDisExp4" id="" class="form-control">
                            <span class="text-danger error-text selDisExp4_error"></span>
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