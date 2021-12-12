@extends('templates/master')

@section('title')
    Game Statistics
@endsection

@section('nav-bar')
    <a class='navbar-brand' href='/history'>Round History</a>
@endsection

@section('content')

    <h2 test='statistics-title'>Game Statistics</h2>

    <a test='home-nav' href='/'>Return home to play the game!</a>

    <div class='spacer-small'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-header'>
                    <h4>Key Statistics</h4>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-small'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-header'>
                    Total games played
                </div>
                <div class='card-body text-center'>
                    <h5 class='card-title'><span test='rounds-count'>{{ $roundsCount }}</span> games have been played.
                    </h5>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-header'>
                    Player's most played move
                </div>
                <div class='card-body text-center'>
                    <img class='stats-image' src='/images/{{ $mostPlayed }}.png' alt='{{ $mostPlayed }}'
                        test='most-played-image'>
                    <h5 class='card-title' test='most-played'>{{ ucfirst($mostPlayed) }}</h5>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-medium'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-header'>
                    <h4>Results Breakdown</h4>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-small'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <h5 class='card-title'><span test='player-won-count'>{{ $playerWonCount }}</span> player wins</h5>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <h5 class='card-title'><span test='tie-count'>{{ $tiesCount }}</span> ties</h5>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <h5 class='card-title'><span test='computer-won-count'>{{ $computerWonCount }}</span> computer wins
                    </h5>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-small'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <h5 class='card-title'>The player won <span test='player-won-percent'>{{ $playerWonPercent }}</span>%
                        of games.
                    </h5>
                    <p class='card-text'>Percentage of times the player beat the computer.</p>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <h5 class='card-title'>A tie was declared <span test='tie-percent'>{{ $tiesPercent }}</span>% of
                        games.</h5>
                    <p class='card-text'>Percentage of times the player and computer tied.</p>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <h5 class='card-title'>The computer won <span
                            test='computer-won-percent'>{{ $computerWonPercent }}</span>% of
                        games.</h5>
                    <p class='card-text'>Percentage of times the computer beat the player.</p>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-medium'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-header'>
                    <h4>Player's Moves Breakdown</h4>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-small'></div>

    <div class='row'>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <img class='stats-image' src='/images/rock.png' alt='Rock'>
                    <h5 class='card-title'>The player chose rock <span test='rock-choice'>{{ $rockPercent }}</span>% of
                        games.</h5>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <img class='stats-image' src='/images/paper.png' alt='Rock'>
                    <h5 class='card-title'>The player chose paper <span test='paper-choice'>{{ $paperPercent }}</span>%
                        of games.</h5>
                </div>
            </div>

        </div>

        <div class='col'>

            <div class='card'>
                <div class='card-body text-center'>
                    <img class='stats-image' src='/images/scissors.png' alt='Rock'>
                    <h5 class='card-title'>The player chose scissors <span
                            test='scissors-choice'>{{ $scissorsPercent }}</span>% of games.</h5>
                </div>
            </div>

        </div>

    </div>

    <div class='spacer-small'></div>

    <div class='row text-center'>

        <p>
            View
            <a test='history-nav' href='/history'>round history</a>
            or return
            <a test='home-nav' href='/'>home</a>
            to play the game.
        </p>

    </div>

@endsection
