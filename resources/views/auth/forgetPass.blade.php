<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h4> User Login</h4>
                <hr>
                <form action="{{ route('auth.forgetPass')}}" method="POST" id="">
                @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control" value="{{ old('email')}}">
                        <span class="text-danger error-text email_error"></span>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit">Login</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>