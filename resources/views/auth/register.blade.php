@extends('layouts.backend.login')

@section('content')
<body class="hold-transition register-page">
    <div class="register-box">



<div class="register-box-body">
    <p class="login-box-msg">REGISTRO EXPOSURE</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="form-group has-feedback">

        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombres" required autofocus>

        @if ($errors->has('name'))
            <span class="glyphicon glyphicon-user form-control-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

      </div>
      <div class="form-group has-feedback">

        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email" required>

        @if ($errors->has('name'))
            <span class="glyphicon glyphicon-user form-control-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>


        @if ($errors->has('password'))
        <span class="glyphicon glyphicon-lock form-control-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif

      </div>

      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repita password" required>

        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-2 text-center"></div>
        <div class="col-xs-8 text-center">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarme</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



    <a href="/login" class="text-center" style="display: block;">Ya tengo registro</a>
  </div>
@endsection


