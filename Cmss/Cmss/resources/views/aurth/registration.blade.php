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
    <div class="main">
      <h4>Register</h4>
      <hr>
      <form action="{{route('register-user')}}" method="post">
        @if(Session::has('success'))
        <div class="alert">{{session::get('success')}}</div>
        @endif 
        @if(Session::has('fail'))
        <div class="alert">{{session::get('fail')}}</div>
        @endif 
        @csrf
        <div class="input">
          <input type="text" name="name" value="{{old('name')}}" placeholder="Enter User name here."><br>
          <span class="danger">@error('name') {{$message}} @enderror</span>
        </div>

        <div class="input">
          <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Email here."><br>
          <span class="danger">@error('email') {{$message}} @enderror</span>

        </div>
        <div class="input">         
          <input type="text" name="password" value="{{old('password')}}" placeholder="Enter Password."><br>
          <span class="danger">@error('password') {{$message}} @enderror</span>

        </div>
        <div class="submit">
          <button type="submit">Create</button>
        </div>
        <p class="message">Already registered?<a href="login">Login</a></p>
      </form>
    </div>
  </div>
</body>
</html>