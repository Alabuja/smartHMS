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

      <h2 class="form-heading">Forgot Password ?</h2>
      <div class="container log-row">
          <form class="form-signin" action="{{url('patient/password/email')}}" method="POST">
                {!! csrf_field() !!}

                <div class="login-wrap">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="email" name="email" placeholder="Email" autocomplete="off"  class="form-control placeholder-no-fix" value="{{ old('email') }}">

                    <button class="btn btn-lg btn-success btn-block" type="submit">Send Password Reset Links</button>
                </div>
          </form>
      </div>

      <!--jquery-1.10.2.min-->
      <script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
      <!--Bootstrap Js-->
      <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

  </body>
</html>
