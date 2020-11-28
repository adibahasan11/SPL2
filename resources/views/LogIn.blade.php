@extends('layouts.app')

@section('content')

    <h2>User Login</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label>Email</label>
        <div>    
        <input type="text" name="Uname" id="Uname" placeholder="Email">    
        <br><br></div>    
        <label>Password</label>
        <div>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br></div>
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>
        <div class="login-button">   
        <button class="btn btn-primary" id="login" onclick="window.location.href='http://127.0.0.1:8000/home';"> Log In </button>       
        <br><br></div>       
        <div class="remember"><a class="forgot" href="home">Forgot Password?</a></div>
    </form>     
</div>    
@endsection
