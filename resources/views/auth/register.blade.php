@extends('layouts.app')

@section('content')


<div class="container-fluid" id="regist">
    <div class="row">
        <div class="col-sm-12 ">
            <h3>SIGN UP</h3>

            <h4>Membership registration is required to receive your free HolyShirt</h4>
            <form method="POST" action="{{ route('register') }}">
              @csrf
                <div class="form-group d-flex justify-content-center">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group d-flex justify-content-center">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group d-flex justify-content-center">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group d-flex justify-content-center">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                </div>
            <button type="submit" class="btn"  >Register</button>
          </form>
            <h4>Already have an account? <a href="/login" style="color:#202020">Login Here</a></h4>
        </div>
    </div>
</div>

@endsection
