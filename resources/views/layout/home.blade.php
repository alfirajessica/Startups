<html lang="en">
@extends('layout.head')
<body>
    @extends('layout.nav')


<main>
    <label for="">{{ $LoggedUserInfo['role'] }}</label>
    {{-- @include('layout.footer') --}}
</main>


</body>
</html>