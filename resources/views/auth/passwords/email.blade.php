@extends('layouts.login')

@section('content')
 <div class="content content-fixed content-auth-alt">
      <div class="container d-flex justify-content-center ht-100p">
        <div class="mx-wd-300 wd-sm-450 ht-100p d-flex flex-column align-items-center justify-content-center">
          <div class="wd-80p wd-sm-300 mg-b-15"><img src="{{ asset('public/assets/img/img18.png')}}" class="img-fluid" alt=""></div>
          <h4 class="tx-20 tx-sm-24">{{ __('Reset Password') }}</h4>
          <p class="tx-color-03 mg-b-30 tx-center">Enter your email address and we will send you a link to reset your password.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="wd-100p d-flex flex-column flex-sm-row mg-b-40">
            <input type="text" class="form-control wd-sm-250 flex-fill @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
            <button type="submit" class="btn btn-brand-02 mg-sm-l-10 mg-t-10 mg-sm-t-0">{{ __('Send Password Reset Link') }}</button>
             @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
            @enderror
            </div>
        </form>

        </div>
      </div><!-- container -->
    </div><!-- content -->
@endsection
