@extends('master')

@section('content')
  <div class="container">
    <div class="row main">
      <div class="main-center col-md-6 mx-auto card card-body register-form">
      <h5 class="text-center mb-4">Registrate.</h5>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>

          @if ($errors->has('name'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <input id="user" type="text" class="form-control{{ $errors->has('user') ? ' is-invalid' : '' }}" name="user" value="{{ old('user') }}" placeholder="{{ __('User') }}" required autofocus>

          @if ($errors->has('user'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('user') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>

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
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
        </div>
        <button type="submit" class="btn btn-success">
            {{ __('Register') }}
        </button>
      </form>
      </div>
    </div>
  </div>
@endsection
