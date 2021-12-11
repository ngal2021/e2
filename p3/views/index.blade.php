@extends('templates/master')

@section('nav-bar')
    <a class="navbar-brand" href="/history">Game History</a>
    <a class="navbar-brand" href="/statistics">Game Statistics</a>
@endsection

@section('content')

    <h2 test='home-title'>Instructions</h2>

    <ul>
        <li>You and the other player, the computer, randomly throw a move, either rock, paper, or scissors.</li>
        <li>Rock beats scissors, scissors beats paper, and paper beats rock.</li>
        <li>If the players throw the same move, a tied is declared.</li>
        <li>You may play as many times as you would like by selecting and playing your move!</li>
    </ul>

    <div class='spacer-small'></div>

    <h2>Play</h2>

    <div class='container'>

        <form method='POST' action='/process'>

            <label for='Move'>
                <h4>Select your move: </h4>
            </label>

            <div class="row">

                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <input type='radio' test='rock-radio' id='rock' name='Move' value='rock'><label
                                for='rock'>Rock</label>
                            <img class='radio-image' src='/images/rock.png' alt='Rock'>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <input type='radio' test='paper-radio' id='paper' name='Move' value='paper'><label
                                for='paper'>Paper</label>
                            <img class='radio-image' src='/images/paper.png' alt='Paper'>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <input type='radio' test='scissors-radio' id='scissors' name='Move' value='scissors'><label
                                for='scissors'>Scissors</label>
                            <img class='radio-image' src='/images/scissors.png' alt='Scissors'>
                        </div>
                    </div>
                </div>

            </div>

            <div class='spacer-xs'></div>

            <div class="row">
                <button type='submit' test='game-submit' class='btn btn-block btn-secondary'>Play Move</button>
            </div>

        </form>
    </div>

    @if ($app->errorsExist())
        <ul test='error-output' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                {{ $error }}
            @endforeach
        </ul>
    @endif

    <div class='spacer-small'></div>

    <h2>Results</h2>

    @if ($result)
        <span test='result-output'></span>
        @if ($playerMove)
            You threw <span test='player-move'>{{ $playerMove }}</span>, the computer threw <span
                test='computer-move'>{{ $computerMove }}</span>.

            @if ($tie)
                <span test='tie-output' class="tie">You and the computer tied!</span>
            @elseif ($won)
                <span test='won-output' class="won">Congrats, you won!
                    {{ ucfirst($playerMove) }}
                    beats
                    {{ $computerMove }}.</span>
            @else
                <span test='lost-output' class="lost">Sorry, you lost! {{ ucfirst($playerMove) }}
                    is
                    beaten
                    by
                    {{ $computerMove }}.</span>
            @endif

        @endif

    @else

        <p>Play a move to see results!</p>

    @endif
    <div class='spacer-small'></div>

    <div class='row text-center'>
        <p>View game <a test='history-nav' href='/history'>history</a> or <a test='statistics-nav' href='/statistics'>
                statistics</a>
    </div>

@endsection
