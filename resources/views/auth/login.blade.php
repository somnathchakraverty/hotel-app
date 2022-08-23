<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Channel Manager Login</title>
    <link rel="stylesheet" href="{{asset("admin/login/css/style.css")}}">
</head>
<body data-vide-bg="{{asset("admin/login/maldives")}}">
<div class="layer"></div>
<form action="{{route("login")}}" method="post">
    @csrf
    @method("post")
    <div class="form-header">
        <img src="{{asset("admin/login/logo.png")}}" alt="logo">
        <h1>Welcome Back !</h1>
        <h3>Enter your credentials to login</h3>
        @if(\Illuminate\Support\Facades\Session::has("error"))
            <h3 style="color: red;">{{\Illuminate\Support\Facades\Session::get("error")}}</h3>
        @endif
    </div>
    <div class="input-container">
        <input type="email" name="email" placeholder="Enter Email">
    </div>
    <div class="input-container">
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <div class="input-container">
        <input type="submit" value="Login">
    </div>
    <div class="link-container">
        <a href="#">Forget password ?</a>
    </div>
    <div class="link-container">
        <a href="{{ url('/register') }}">Join Us!</a>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset("admin/login/js/jquery.vide.js")}}"></script>
</body>
</html>
