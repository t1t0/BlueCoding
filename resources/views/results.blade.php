@extends('layouts.app')

@section('content')
    <div class="uk-width-1-1 p20">
        <form method="GET" action="/results" role="search" class="mt10 mb40">
            @csrf
            <fieldset class="uk-fieldset">
                <div uk-grid class="uk-grid-collapse">
                    <div class="uk-width-2-3 pr5 pl10">
                        <input class="uk-input uk-width-1-1" type="text" placeholder="Search Gif..." name="search">
                    </div>
                    <div class="uk-width-1-3 pl5 pr10">
                        <button type="submit" class="uk-button uk-button-secondary uk-width-1-1">Search</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <div uk-grid uk-height-match="target: > div > img">
            @foreach ($giphys->data as $giphy)
            <div class="uk-width-1-5@l uk-width-1-3@m uk-width-1-2@s">
                <a href=""><img src="{{ $giphy->images->original->url }}"></a>
                @auth
                <div class="pt5 pb5">
                    <ul class="uk-iconnav">
                        <favoritebutton gif_id="{{ $giphy->id }}"></favoritebutton>
                        <sharelinkbutton></sharelinkbutton>
                    </ul>
                </div>
                @endauth
            </div>
            @endforeach
        </div>
        <div class="p30 uk-text-center uk-flex uk-flex-middle uk-flex-center">
            <ul class="uk-pagination" uk-margin>
                <li><a href="/results?search={{ $search }}&page={{ $page-1 }}" @if($page==1) class="uk-disabled"@endif><span uk-pagination-previous></span></a></li>
                <li><a href="/results?search={{ $search }}&page=1">1</a></li>
                <li class="uk-disabled"><span>...</span></li>
                @for ($i = 2; $i <= 10; $i++)
                <li><a href="/results?search={{ $search }}&page={{ $i }}">{{ $i }}</a></li>
                @endfor
                <li><a href="/results?search={{ $search }}&page={{ $page+1 }}" @if($page==10) class="uk-disabled"@endif><span uk-pagination-next></span></a></li>
            </ul>
        </div>
    </div>
@endsection