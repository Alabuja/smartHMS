<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Alabuja Daniel" />
    <meta name="keyword" content="" />
    <meta name="description" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Base Styles -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


</head>

  <body class="login-body">

      <div class="login-logo">
          <img src="{{URL::asset('img/login_logo.png')}}" alt=""/>
      </div>

      <h2 class="form-heading">login</h2>
      <div class="container log-row">
          <form action="{{ url('patient/authenticate') }}" method="POST" class="form-signin">
                {{ csrf_field() }}

              <div class="login-wrap">
                  <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" autofocus>
                  @if ($errors->has('email')) <p class="text-danger">{{ $errors->first('email') }}</p> @endif

                  <input type="password" class="form-control" placeholder="Password" name="password">
                  @if ($errors->has('password')) <p class="text-danger">{{ $errors->first('password') }}</p> @endif

                  <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button>

                  <label class="checkbox-custom check-success">
                      <input type="checkbox" value="remember-me" id="checkbox1" {{ old('remember') ? 'checked' : '' }}> <label for="checkbox1">Remember me</label>
                      <a class="pull-right" data-toggle="modal" href="{{url('patient/password/reset')}}"> Forgot Password?</a>
                  </label>

              </div>
              <!-- modal -->

          </form>
      </div>

      <!--jquery-1.10.2.min-->
      <script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
      <!--Bootstrap Js-->
      <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

  </body>
</html>
