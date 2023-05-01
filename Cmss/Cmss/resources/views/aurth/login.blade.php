<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Stylesheet" href="css/aurth.css">
  <title>Login Page</title>
</head>
<body>
  <div class="container">
    <div class="main" style="height: 400px">
      <h4>Login</h4>
      <hr> 
      <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
        <div class="alert">{{session::get('success')}}</div>
        @endif 
        @if(Session::has('fail'))
        <div class="alert">{{session::get('fail')}}</div>
        @endif 
        @csrf
        <div class="input">
          <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Email here.">
          <span class="danger">@error('email') {{$message}} @enderror</span>
        </div>
        <div class="input">         
          <input type="text" name="password" value="{{old('email')}}" placeholder="Enter Password.">
          <span class="danger">@error('password') {{$message}} @enderror</span>
        </div>
        <div class="submit">
          <button type="submit">login</button>
        </div>
        <p class="message">Not registered?<a href="registration">Register</a></p>
      </form>
    </div>
  </div>
</body>
</html>