<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h4> User Login</h4>
                <hr>
                <form action="{{ route('auth.resetPass')}}" method="POST" id="">
                @csrf
                
                    <input type="hidden" name="token" value="{{ $token }}">
                
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <input type="email" name="email" id="" class="form-control" value="{{ old('email')}}">
                        <span class="text-danger error-text email_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="text-danger error-text password_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">password_confirmation</label>
                        <input type="password" name="password_confirmation" id="" class="form-control">
                        <span class="text-danger error-text password_confirmation_error"></span>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit">Save New Password</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>