@extends('layouts.app')

@section('content')
    <div class="uk-flex uk-flex-center pr20 pl20 pb20" id="initial-search">
        <div class="uk-width-1-2@l uk-width-2-3@m uk-width-1-1@s">
            <p class="uk-text-center"><img src="{{ asset('images/logo.png') }}"></p>
            <form method="GET" action="/results" role="search">
                @csrf
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Search Gif..." name="search">
                    </div>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-secondary uk-width-1-1">Search</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection