@extends('templates/master')

@section('title')
    Round Details
@endsection


@section('nav-bar')
    <a class='navbar-brand' href='/history'>Round History</a>
@endsection


@section('content')

    <h2>Round Details</h2>

    <a test='history-nav-round' href='/history'>Return to round history</a>

    <div class='spacer-small'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>

                <div class='card-header'>
                    Details about <b>round #<span test='round-id'>{{ $round['id'] }}</span></b>
                </div>

                <div class='card-body'>

                    <p class='card-text'>

                    <ul>

                        <li><b>Player's move:</b> <span test='player-move'>{{ $round['playerMove'] }}</span></li>

                        <li><b>Computer's move:</b> <span test='computer-move'>{{ $round['computerMove'] }}</span></li>

                        @if ($round['tie'])

                            <li test='tie-output'><b>Result:</b> <span class='tie'>The player and the computer tied.</span>
                            </li>

                        @elseif ($round['won'])

                            <li test='won-output'><b>Result:</b> <span class='won'>The player won!</span></li>

                        @elseif ($round['won'] == 0)

                            <li test='lost-output'><b>Result:</b> <span class='lost'>The computer won!</span></li>

                        @endif

                        <li><b>Timestamp:</b> {{ $round['timestamp'] }}</li>

                    </ul>

                    </p>

                </div>

            </div>

        </div>

    </div>

    <div class='spacer-small'></div>

    <div class='row text-center'>

        <p>
            View game
            <a test='history-nav' href='/history'>history</a>
            or
            <a test='statistics-nav' href='/statistics'>statistics</a>
        </p>

    </div>

@endsection
