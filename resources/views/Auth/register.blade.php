@extends('master')
@section('content')
  <div class="container">
    <div class="row main">
      <div class="main-center col-md-6 mx-auto card card-body register-form">
      <h5 class="text-center mb-4">Registrate.</h5>
      <form method="POST" action="/register">
        @csrf
        @include('layouts.errors')
        <div class="form-group">
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>


        </div>
        <div class="form-group">
          <input type="text" class="form-control{{ $errors->has('user') ? ' is-invalid' : '' }}" name="user" value="{{ old('user') }}" placeholder="{{ __('User') }}">

        </div>
        <div class="form-group">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>


        </div>
        <div class="form-group">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

        </div>
        <div class="form-group">
          <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
      </form>
      </div>
    </div>
  </div>

@endsection
