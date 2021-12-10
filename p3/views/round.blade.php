@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>
    <a href='/history'>Return to round history</a>

    <ul>
        <li><b>Round id:</b> {{ $round['id'] }}</li>
        <li><b>Player's move:</b> {{ $round['playerMove'] }}</li>
        <li><b>Computer's move:</b> {{ $round['computerMove'] }}</li>
        @if ($round['tie'])
            <li><b>Result:</b> The player and the computer tied.</li>
        @elseif ($round['won'])
            <li><b>Result:</b> The player won!</li>
        @else
            <li><b>Result:</b> The computer won!</li>
        @endif
        <li><b>Timestamp:</b> {{ $round['timestamp'] }}</li>

    </ul>
@endsection
