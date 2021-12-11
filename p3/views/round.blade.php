@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>

    <a test='history-nav-round' href='/history'>Return to round history</a>

    <ul>

        <li><b>Round id:</b> <span test='round-id'>{{ $round['id'] }}</span></li>

        <li><b>Player's move:</b> <span test='player-move'>{{ $round['playerMove'] }}</span></li>

        <li><b>Computer's move:</b> <span test='computer-move'>{{ $round['computerMove'] }}</span></li>

        @if ($round['tie'])
            <li test='tie-output'><b>Result:</b> The player and the computer tied.</li>
        @elseif ($round['won'])
            <li test='won-output'><b>Result:</b> The player won!</li>
        @else
            <li test='lost-output'><b>Result:</b> The computer won!</li>
        @endif

        <li><b>Timestamp:</b> {{ $round['timestamp'] }}</li>

    </ul>
@endsection

@section('nav-bar')
    <a class="navbar-brand" href="/history">Game History</a>
@endsection
