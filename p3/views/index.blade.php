@extends('templates/master')

@section('content')

    <div class='container'>

        <div class='row text-center'>
            <h2 test='home-title'>Instructions</h2>
        </div>

        <div class='row'>
            <div class='col text-center'>
                <p>You and the other player, the computer, randomly throw a move, either rock, paper, or scissors.</p>
                <p>Rock beats scissors, scissors beats paper, and paper beats rock.</p>
                <p>If the players throw the same move, a tied is declared.</p>
            </div>
        </div>

    </div>

    <div class='row text-center'>
        <h2>Play</h2>
    </div>
    <div class='row'>
        <div class='col text-center'>
            <p>You may play as many times as you would like by selecting and playing your move!</p>
        </div>
    </div>

    <div class='row'>

        <div class='col text-center'>

            <form method='POST' action='/process'>

                <label for='Move'><b>Choose your move: </b></label>

                <input type='radio' test='rock-radio' id='rock' name='Move' value='rock'><label for='rock'>Rock</label>
                <img class='radio-image' src='/images/rock.png' alt='Rock'>

                <input type='radio' test='paper-radio' id='paper' name='Move' value='paper'><label for='paper'>Paper</label>
                <img class='radio-image' src='/images/paper.png' alt='Paper'>

                <input type='radio' test='scissors-radio' id='scissors' name='Move' value='scissors'><label
                    for='scissors'>Scissors</label>
                <img class='radio-image' src='/images/scissors.png' alt='Scissors'>

                <button type='submit' test='game-submit' class='btn btn-secondary'>Play Move</button>

            </form>

        </div>

    </div>

    @if ($app->errorsExist())
        <ul test='error-output' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                {{ $error }}
            @endforeach
        </ul>
    @endif

    <div class='row'>

        <div class='col text-center'>

            <h2>Results</h2>

        </div>

        @if ($result)

            <div class='row'>

                <div class='results col text-center' test='result-output'>
                    @if ($playerMove)
                        You threw <span test='player-move'>{{ $playerMove }}</span>, the computer threw <span
                            test='computer-move'>{{ $computerMove }}</span>.

                        @if ($tie)
                            <span test='tie-output' class="tie">You and the computer tied!</span>
                        @elseif ($won)
                            <span test='won-output' class="won">Congrats, you won! {{ ucfirst($playerMove) }}
                                beats
                                {{ $computerMove }}.</span>
                        @else
                            <span test='lost-output' class="lost">Sorry, you lost! {{ ucfirst($playerMove) }} is
                                beaten
                                by
                                {{ $computerMove }}.</span>
                        @endif

                    @endif
                </div>

            </div>

        @else

            <div class='row text-center'>

                <p>Play the a move to see results!</p>

            </div>
        @endif
        <div class='row text-center'>
            <a test='history-nav' href='/history'>View game history</a>
        </div>

    </div>

@endsection

@section('nav-bar')
    <a class="navbar-brand" href="/history">Game History</a>
@endsection
