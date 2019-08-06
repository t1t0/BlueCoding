@extends('layouts.app')

@section('content')
<div class="uk-flex uk-flex-center uk-flex-middle p20 screen-middle-section">
    <div class="uk-width-1-2@l uk-width-2-3@m uk-width-1-1@s">
        <p class="uk-text-center"><img src="{{ asset('images/logo.png') }}" width="125"></p>
        <form method="POST" action="{{ route('password.email') }}">
            <legend class="uk-legend">{{ __('Reset Password') }}</legend>
            @csrf
            @if ($errors->any())
            <div uk-alert class="uk-alert-danger">
                <a class="uk-alert-close" uk-close></a>
                <h4>Form Errors</h4>
                <ul class="uk-list uk-list-bullet">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="uk-margin">
                <label class="uk-form-label" for="email">{{ __('E-Mail Address') }}</label>
                <div class="uk-form-controls">
                    <input id="email" type="email" class="uk-input @error('email') uk-form-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="buttons"></label>
                <div class="uk-form-controls uk-text-right">
                    <button type="submit" class="uk-button uk-button-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>   
@endsection
