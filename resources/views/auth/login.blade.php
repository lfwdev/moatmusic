@extends('auth.layout')
@section('sectiontitle','Sign-in')
@section('form')
<div class="alert dark-bg col-12 text-center">
    @if (Route::has('register'))
        <a class="btn btn-outline-link" href="{{ route('register') }}">
            {{ __('First time here? Sign-up instead') }} <em class="fa fa-sign-in"></em>
        </a>
    @endif
</div>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control form-control-custom @error('email','default') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="invalid-feedback">
                @error('email','default')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control form-control-custom @error('password','default') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="invalid-feedback" role="alert">
                @error('password','default')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-outline-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-outline-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form>
@endsection
