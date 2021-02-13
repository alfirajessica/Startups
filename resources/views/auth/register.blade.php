<html lang="en">
@extends('layout.head')
<link rel="stylesheet" href="/css/register.css">
<body>

{{-- <main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-8 col-md-offset-4">
                <h4> User Register</h4>
                <hr>
                <form action="{{ route('auth.save')}}" method="POST" id="register_form">
                @csrf
                    <div class="form-group">
                        <label for="firstname">Nama Depan</label>
                        <input type="text" name="firstname" id="" class="form-control" placeholder="Nama Pertama Anda">
                        <span class="text-danger error-text firstname_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nama Belakang</label>
                        <input type="text" name="lastname" id="" class="form-control" placeholder="Nama Belakang Anda">
                        <span class="text-danger error-text lastname_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="Email Anda">
                        <span class="text-danger error-text email_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="text-danger error-text password_error"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="role">Role</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input value="1" type="radio" name="role" id="" autocomplete="off">
                                Developer
                            </label>
                            <label class="btn btn-primary">
                                <input value="2" type="radio" name="role" id=" " autocomplete="off ">
                                Investor
                            </label>
                        </div>
                        <span class="text-danger error-text role_error"></span>
                    </div>

                    <div class="form-group">
                      <button type="submit">Register</button>
                    </div>
                    <br>
                    <a href="{{ route('auth.login') }}">Sudah Punya Akun!</a>
                </form>
            </div>
        </div>
    </div>
</main> --}}

<div class="container mx-0">
    <div class="forms-container">
      <div class="signin-signup">
        <form class="sign-in-form" action="{{ route('auth.save')}}" method="POST" id="register_form">
            @csrf
                
                <h2 class="title">Register</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="firstname" value="{{ old('firstname')}}" placeholder="Nama Depan"  />
                        </div>
                        <span class="text-danger error-text firstname_error"></span>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="lastname" value="{{ old('lastname')}}" placeholder="Nama Belakang"  />
                        </div>
                        <span class="text-danger error-text lastname_error"></span>
                    </div>
                </div>
                
                <div class="input-field">
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
                
                <label for="role">Role Anda?</label>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary">
                      <input value="1" type="radio" name="role" id="" autocomplete="off"> Developer
                    </label>
                    <label class="btn btn-outline-primary">
                      <input value="2" type="radio" name="role" id=" " autocomplete="off "> Investor
                    </label>
                    <span class="text-danger error-text role_error"></span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <br>
                <a href="{{ route('auth.login') }}">Sudah Punya Akun!</a>
            </form>
      </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            
            <img src="/assets/log.svg" class="image" alt="" />
        </div>
    </div>
</div>


</body>
</html>