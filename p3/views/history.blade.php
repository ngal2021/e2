@extends('templates/master')

@section('title')
    Round History
@endsection

@section('nav-bar')
    <a class="navbar-brand" href="/statistics">Game Statistics</a>
@endsection

@section('content')
    <h2 test='history-title'>Round History</h2>
    <a test='home-nav' href='/'>Return home to play the game!</a>
    <div class='spacer-small'></div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Timestamp</th>
                <th scope="col">Player's Move</th>
                <th scope="col">Result</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rounds as $round)
                <tr>
                    <td><a test='round-link' href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></td>
                    <td><img class="radio-image" src="/images/{{ $round['playerMove'] }}.png"
                            alt="{{ $round['playerMove'] }}"></td>
                    @if ($round['won'] == 1)
                        <td class="won">Won</td>
                    @elseif($round['tie'] == 1)
                        <td class="tie">Tie</td>
                    @else
                        <td class="lost">Lost</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class='row text-center'>
        <p>View game
            <a test='statistics-nav' href='/statistics'>statistics</a> or return <a test='home-nav' href='/'>home</a>
            to play the game.
        </p>
    </div>

@endsection
