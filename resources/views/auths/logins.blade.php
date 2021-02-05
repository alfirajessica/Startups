<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <form>
                @csrf    
                {{-- <div class="results">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                    @endif

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div> --}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control" value="{{ old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
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