@extends('templates/master')

@section('content')

    <a href='/history'>Game History</a>
    <h2>Instructions</h2>

    <ul>
        <li>You and the other player, the computer, randomly throw a move, either rock, paper, or scissors.</li>
        <li>If both players throw the same move, and thus, a winner cannot be determined, a tied is declared.</li>
        <li>Otherwise: rock beats scissors, scissors beats paper, and paper beats rock.</li>
    </ul>

    <h2>Play</h2>

    <ul>
        <li>Select your move, and then press <strong>Play Move</strong>. You may play as many times as you would like!</li>
    </ul>

    <form method='POST' action='/process'>
        <label for='Move'><b>Choose your move: </b></label>
        <input type='radio' id='rock' name='Move' value='rock'><label for='rock'>Rock</label>
        <input type='radio' id='paper' name='Move' value='paper'><label for='paper'>Paper</label>
        <input type='radio' id='scissors' name='Move' value='scissors'><label for='scissors'>Scissors</label>

        <button type='submit'>Play Move</button>

    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                {{ $error }}
            @endforeach
        </ul>
    @endif

    <h2>Results</h2>

    <div class="results">
        @if ($playerMove)
            You threw {{ $playerMove }}, the computer threw {{ $computerMove }}.

            @if ($tie)
                <span class="tie">You and the computer tied!</span>
            @elseif ($won)
                <span class="won">Congrats, you won! {{ ucfirst($playerMove) }} beats
                    {{ $computerMove }}.</span>
            @else
                <span class="lost">Sorry, you lost! {{ ucfirst($playerMove) }} is beaten by
                    {{ $computerMove }}.</span>
            @endif

        @endif
    </div>

@endsection
