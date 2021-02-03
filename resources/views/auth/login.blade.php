<html lang="en">
@extends('layout.head')
<body>

<main>
    <div class="container">
        <div class="row my-4" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <form action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <button type="submit">Login</button>
                    </div>
                    <br>
                    <a href="register">Create a new Account now!</a>
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>