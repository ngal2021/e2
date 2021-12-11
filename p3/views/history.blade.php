@extends('templates/master')

@section('title')
    Round History
@endsection

@section('content')
    <h2 test='history-title'>Round History</h2>
    <a test='home-nav' href='/'>Home</a>
    <ul>
        @foreach ($rounds as $round)
            <li><a test='round-link' href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>
        @endforeach
    </ul>
@endsection

@section('nav-bar')
    <a class="navbar-brand" href="/">Home</a>
@endsection
