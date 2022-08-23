<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Channel Manager Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body data-vide-bg="{{asset("admin/login/maldives")}}">
<div class="layer"></div>
<div class="container">
    <div class="form-header">
        <img src="{{asset("admin/login/logo.png")}}" alt="logo">
        <h1>Welcome Back !</h1>
        <h3>Enter your details to Join Us!</h3>
    </div>
    <div class="content">
        <form action="{{route("register")}}" method="post">
            @csrf
            @method("post")
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Company Name</span>
                    <input type="text" name="company_name" placeholder="Enter your Company Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Company Address</span>
                    <input type="text" name="company_address" placeholder="Enter your Company Address" required>
                </div>
                <div class="input-box">
                    <span class="details">Company Email</span>
                    <input type="email" name="email"  placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Company Phone Number</span>
                    <input type="text" name="mobile_number" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="confirm_password"placeholder="Confirm your password" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="checkbox" name="business_type[]" value="1" id="dot-1">
                <input type="checkbox" name="business_type[]" value="2" id="dot-2">
                <input type="checkbox" name="business_type[]" value="3" id="dot-3">
                <input type="checkbox" name="business_type[]" value="4" id="dot-4">
                <input type="checkbox" name="business_type[]" value="5"  id="dot-5">
                <span class="gender-title">Business Category</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Property</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Safari</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Holiday/Tour Packages</span>
                    </label>
                    <label for="dot-4">
                        <span class="dot four"></span>
                        <span class="gender">Transfers</span>
                    </label>
                    <label for="dot-5">
                        <span class="dot five"></span>
                        <span class="gender">Flights</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Join Us!">
            </div>
        </form>
    </div>
    <div class="link-container">
        <a href="#">Forget password ?</a>
    </div>
    <div class="link-container">
        <a href="{{ url('/login') }}">SignIn</a>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset("admin/login/js/jquery.vide.js")}}"></script>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .container{
        max-width: 700px;
        width: 100%;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }
    .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }
    .container .title::before{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .content form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }
    form .input-box span.details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }
    .user-details .input-box input{
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color: #9b59b6;
    }
    form .gender-details .gender-title{
        font-size: 20px;
        font-weight: 500;
    }
    form .category{
        display: flex;
        width: 100%;
        margin: 14px 0 ;
        justify-content: space-between;
    }
    form .category label{
        display: flex;
        align-items: center;
        cursor: pointer;
    }
    form .category label .dot{
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
    }
    #dot-1:checked ~ .category label .one,
    #dot-2:checked ~ .category label .two,
    #dot-3:checked ~ .category label .three,
    #dot-4:checked ~ .category label .four,
    #dot-5:checked ~ .category label .five,
    #dot-6:checked ~ .category label .six,
    #dot-7:checked ~ .category label .seven
    {
        background: #9b59b6;
        border-color: #d9d9d9;
    }
    form input[type="checkbox"]{
        display: none;
    }
    form .button{
        height: 45px;
        margin: 35px 0
    }
    form .button input{
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #059038;
        color: #fff;
    }
    form .button input:hover{
        /* transform: scale(0.99); */
        background: #059038;
        color: #fff;
    }

    .form-header img {
        height: 80px;
    }

    @media(max-width: 584px){
        .container{
            max-width: 100%;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: 100%;
        }
        form .category{
            width: 100%;
        }
        .content form .user-details{
            max-height: 300px;
            overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar{
            width: 5px;
        }
    }
    @media(max-width: 459px){
        .container .content .category{
            flex-direction: column;
        }
    }

    .link-container a {
        color: #888888;
        text-decoration: none;
    }
    .link-container {
        margin-top: 10px;
    }

</style>
