@extends('templates/master')

@section('title')
    Game Statistics
@endsection

@section('nav-bar')
    <a class="navbar-brand" href="/history">Game History</a>
@endsection

@section('content')
    <h2 test='statistics-title'>Game Statistics</h2>

    <div class='spacer-small'></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Key Statistics</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-small"></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Total games played
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $roundsCount }} games have been played.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Most played move
                </div>
                <div class="card-body text-center">
                    <img class="stats-image" src="/images/{{ $mostPlayed }}.png" alt="{{ $mostPlayed }}">
                    <h5 class="card-title">{{ ucfirst($mostPlayed) }}</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-medium"></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Results Breakdown</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-small"></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $playerWonCount }} player wins</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $tiesCount }} ties</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $computerWonCount }} computer wins</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-small"></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">The player won {{ $playerWonPercent }}% of games.</h5>
                    <p class="card-text">Percentage of times the player beat the computer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">A tie was declared {{ $tiesPercent }}% of games.</h5>
                    <p class="card-text">Percentage of times the player and computer tied.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">The computer won {{ $computerWonPercent }}% of games.</h5>
                    <p class="card-text">Percentage of times the computer beat the player.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-medium"></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Player's Moves Breakdown</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-small"></div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <img class="stats-image" src="/images/rock.png" alt="Rock">
                    <h5 class="card-title">Players choose rock {{ $rockPercent }}% of games.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <img class="stats-image" src="/images/paper.png" alt="Rock">
                    <h5 class="card-title">Players choose paper {{ $paperPercent }}% of games.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <img class="stats-image" src="/images/scissors.png" alt="Rock">
                    <h5 class="card-title">Players choose scissors {{ $scissorsPercent }}% of games.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class='spacer-small'></div>

    <div class='row text-center'>
        <p>View game <a test='history-nav' href='/history'>history</a> or return <a test='home-nav' href='/'>home</a> to
            play the game.
    </div>

@endsection
