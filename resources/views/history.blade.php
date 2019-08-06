@extends('layouts.app')

@section('content')
<div class="uk-width-1-1 p20">
    <h3>Search history for {{ Auth::user()->name }}</h3>
    @if(Auth::user()->searches->count())
        <ul class="uk-list uk-list-divider">
        @foreach (Auth::user()->searches as $search)
            <li>
                <a href="/results?search={{ $search->search }}" class="uk-button uk-button-link">{{ $search->search }}</a>
            </li>
        @endforeach
        </ul>
    @endif
</div>
@endsection