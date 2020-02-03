@extends('layouts.login')
@section('content')
<div class="content content-fixed content-auth">
  <div class="container">
    <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
      <div class="media-body align-items-center d-none d-lg-flex">
        <div class="mx-wd-600">
          <img src="{{ asset('public/assets/img/img15.png')}}" class="img-fluid" alt="">
        </div>
      </div><!-- media-body -->
      <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
        <div class="wd-100p">
          <h3 class="tx-color-01 mg-b-5">Sign In</h3>
          <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
          <form method="POST" action="{{ route('login') }}">
                        @csrf
           <div class="form-group">
              <label>{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
          <div class="form-group">
            <div class="d-flex justify-content-between mg-b-5">
              <label class="mg-b-0-f">{{ __('Password') }}</label>
             @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
            @endif
            </div>
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
              @enderror
          </div>
          <div class="form-group">
              <input class="form-controlform-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <span class="form-check-label" for="remember">{{ __('Remember Me') }}</span>
          </div>
          <button class="btn btn-brand-02 btn-block" type="submit">{{ __('Login') }}</button>
          </form>
          <div class="divider-text">or</div>
          <button class="btn btn-outline-facebook btn-block">Sign In With Facebook</button>
          <button class="btn btn-outline-twitter btn-block">Sign In With Twitter</button>
          <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="{{ route('register') }}">Create an Account</a></div>
        </div>
      </div><!-- sign-wrapper -->
    </div><!-- media -->
  </div><!-- container -->
</div><!-- content -->
@endsection
