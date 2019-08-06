@extends('layouts.app')

@section('content')
<div class="uk-flex uk-flex-center pr20 pl20 pb20 screen-middle-section">
    <div class="uk-width-1-2@l uk-width-2-3@m uk-width-1-1@s">
        <p class="uk-text-center"><img src="{{ asset('images/logo.png') }}" width="125"></p>
        <form method="POST" action="{{ route('register') }}" class="uk-form-stacked">
            <legend class="uk-legend">{{ __('Register') }}</legend>
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
                <label class="uk-form-label" for="name">{{ __('Name') }}</label>
                <div class="uk-form-controls">
                    <input id="name" type="text" class="uk-input @error('name') uk-form-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="email">{{ __('E-Mail Address') }}</label>
                <div class="uk-form-controls">
                    <input id="email" type="email" class="uk-input @error('email') uk-form-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="password">{{ __('Password') }}</label>
                <div class="uk-form-controls">
                    <input id="password" type="password" class="uk-input @error('password') uk-form-danger @enderror" name="password" value="{{ old('password') }}" required autofocus>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                <div class="uk-form-controls">
                    <input id="password-confirm" type="password" class="uk-input" name="password_confirmation"  required autocomplete="new-password">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="buttons"></label>
                <div class="uk-form-controls uk-text-right">
                    <button type="submit" class="uk-button uk-button-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection