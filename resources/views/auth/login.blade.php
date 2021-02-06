<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h4> User Login</h4>
                <hr>
                <form action="{{ route('auth.check') }}" method="POST" id="login_form">
                @csrf
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                   {{ Session::get('fail') }}
                </div>
              @endif
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control" value="{{ old('email')}}">
                        <span class="text-danger error-text email_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="text-danger error-text password_error"></span>
                    </div>
                    <div class="form-group">
                      <button type="submit">Login</button>
                    </div>
                    <br>
                    <a href="{{ route('auth.register') }}">Create a new Account now!</a>
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>