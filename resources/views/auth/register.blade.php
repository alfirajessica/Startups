<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-8 col-md-offset-4">
                <h4> User Register</h4>
                <hr>
                <form action="{{ route('auth.create')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama Depan</label>
                        <input type="text" name="nama" id="" class="form-control" placeholder="masukkan nama anda" value="{{ old('nama')}}">
                        <span class="text-danger">@error('nama'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Passwrd</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit">Continue</button>
                    </div>

                    <div class="form-group">
                        <label for="password">Role</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="role" id="" autocomplete="off" checked>
                                Developer
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="role" id="" autocomplete="off">
                                Pembeli
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="role" id=" " autocomplete="off ">
                                Investor
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <button type="submit">Register</button>
                    </div>
                    <br>
                    <a href="login">Sudah Punya Akun!s</a>
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>