@extends('master')

@section('content')
  <div class="container">
    <div class="row main">
      <div class="main-center col-md-6 mx-auto card card-body register-form">
      <h5 class="text-center mb-4">Ingresar.</h5>
      <form method="POST" action="{{ route('login') }}">
          @csrf

        <div class="form-group">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>

          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

          @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label class="form-check-label">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
          </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">
              {{ __('Login') }}
          </button>
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
        </div>
      </form>
      </div>
    </div>
  </div>

@endsection
