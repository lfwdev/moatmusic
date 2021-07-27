@extends('auth.layout')
@section('sectiontitle','Sign-up')
@section('form')
<div class="alert dark-bg col-12 text-center">
    @if (Route::has('login'))
        <a class="btn btn-outline-link" href="{{ route('login') }}">
            {{ __('Already a user? Sign-in instead') }} <em class="fa fa-sign-in"></em>
        </a>
    @endif
</div>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control form-control-custom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name','default')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

        <div class="col-md-6">
            <input id="username" type="text" class="form-control form-control-custom @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

            @error('username','default')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control form-control-custom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password','default')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control form-control-custom" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="admin" id="admin" {{ old('admin') ? 'checked' : '' }}>

                <label class="form-check-label" for="admin">
                    {{ __('Make me Admin') }}
                </label>
            </div>
        </div>
    </div>
    {{-- RECAPTCHA --}}
    {{--@component('m.bv4.forms.recaptcha')--}}
    {{--@endcomponent--}}
    <div class="form-group row mb-5">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-outline-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
@endsection
