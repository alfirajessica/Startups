<html lang="en">
@extends('layout.head')
<link rel="stylesheet" href="/css/login.css">
<body>


    {{-- <div class="container"> 
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
                    <a href="{{ route('auth.forgetPass') }}">Lupa Password?</a>

                    <br>
                    <a href="{{ route('auth.register') }}">Create a new Account now!</a>
                </form>
            </div>
        </div>
    </div>--}}

    <div class="container mx-0">
        <div class="forms-container">
          <div class="signin-signup">
            <form class="sign-in-form" action="{{ route('auth.check') }}" method="POST" id="login_form">
                @csrf
                    <h2 class="title">Sign in</h2>
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    </div>
                    @endif
                    <div class="form-group input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" value="{{ old('email')}}" placeholder="Email"  />
                    </div>
                    <span class="text-danger error-text email_error"></span>
                   
                    <div class="input-field">
                        <i class="fa fa-eye" id="i_eye" style="display:block;" onclick="show()"></i>
                        <i class="fa fa-eye-slash" onclick="hide()" id="i_slash" style="display:none;"></i>
                        <input type="password" name="password" placeholder="Password" id="password"/>
                        <span class="text-danger error-text password_error"></span>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="{{ route('auth.forgetPass') }}">Lupa Password?</a>

                    <br>
                    <a href="{{ route('auth.register') }}">Create a new Account now!</a>
                </form>
          </div>
        </div>
  
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>
                {{-- <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button> --}}
                </div>
                <img src="/assets/log.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    {{-- <script src="/js/app.js"></script> --}}

    <script>
    function show() {
        $("#password").attr("type", "text");
        $("#i_eye").attr("style", "display:none");
        $("#i_slash").attr("style", "display:block");
      }
      
      function hide() {
        $("#password").attr("type", "password");
        $("#i_eye").attr("style", "display:block");
        $("#i_slash").attr("style", "display:none");
      }
    </script>
</body>
</html>