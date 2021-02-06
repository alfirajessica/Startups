<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-8 col-md-offset-4">
                <h4> User Register</h4>
                <hr>
                <form action="{{ route('auth.save')}}" method="POST" id="register_form">
                @csrf
                @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif
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
</main>




</body>
</html>