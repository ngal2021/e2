<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $playerMove = $this->app->old('playerMove');
        $computerMove = $this->app->old('computerMove');
        $result = $this->app->old('result');
        $won = $this->app->old('won');
        $tie = $this->app->old('tie');

        return $this->app->view('index', [
            'playerMove' => $playerMove,
            'computerMove' => $computerMove,
            'result' => $result,
            'won' => $won,
            'tie' => $tie
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'Move' => 'required'
        ]);

        $playerMove = $this->app->input('Move');

        $moves = ['rock', 'paper', 'scissors'];

        // Error checking for client-side HTML value alterations
        if (in_array(strval($playerMove), $moves)) {

            $computerMove = $moves[rand(0, 2)];

            $result = $this->determineOutcome($playerMove, $computerMove);

            if ($result == 'tie') {
                $tie = True;
            } else if ($result == 'player') {
                $won = True;
            }

            $this->app->db()->insert('rounds', [
                'playerMove' => $playerMove,
                'computerMove' => $computerMove,
                'result' => $result,
                'won' => ($won) ? 1 : 0,
                'tie' => ($tie) ? 1 : 0,
                'timestamp' => date('Y-m-d H:i:s')
            ]);

            return $this->app->redirect('/', ['playerMove' => $playerMove, 'computerMove' => $computerMove, 'result' => $result, 'won' => $won, 'tie' => $tie]);

        } else {
            
            // Redirect user if form value is not one of the three moves
            return $this->app->redirect('/');
        }
    
    }

    public function determineOutcome($playerMove, $computerMove)
    {
        if ($playerMove == $computerMove) {
            return 'tie';
        } else if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
            return 'player';
        } else {
            return 'computer';
        }
    }

    public function history() 
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round() 
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', ['round' => $round]);
    }

    public function statistics()
    {
        $roundsCount = count($this->app->db()->all('rounds'));

        $tiesCount = count(($this->app->db()->findByColumn('rounds', 'tie', '=', '1'))); 
        $tiesPercent = round($tiesCount / $roundsCount * 100);
        
        $playerWonCount = count(($this->app->db()->findByColumn('rounds', 'won', '=', '1')));
        $playerWonPercent = round($playerWonCount / $roundsCount * 100);

        $computerWonCount = $roundsCount - $playerWonCount - $tiesCount;
        $computerWonPercent = round($computerWonCount / $roundsCount * 100);

        $rockMoves = count(($this->app->db()->findByColumn('rounds', 'playerMove', '=', 'rock')));
        $paperMoves = count(($this->app->db()->findByColumn('rounds', 'playerMove', '=', 'paper')));
        $scissorsMoves = count(($this->app->db()->findByColumn('rounds', 'playerMove', '=', 'scissors')));

        $rockPercent = round($rockMoves / $roundsCount * 100);
        $paperPercent = round($paperMoves / $roundsCount * 100);
        $scissorsPercent = round($scissorsMoves / $roundsCount * 100);

        if ($rockPercent > $paperPercent and $rockPercent > $scissorsPercent) {
            $mostPlayed = 'rock';
        } elseif ($paperPercent > $rockPercent and $paperPercent > $scissorsPercent) {
            $mostPlayed = 'paper';
        } elseif ($scissorsPercent > $rockPercent and $scissorsPercent > $paperPercent) {
            $mostPlayed = 'scissors';
        } else {
            $mostPlayed = 'Undetermined';
        }
        
        return $this->app->view('statistics', [
            'roundsCount' => $roundsCount, 
            'tiesCount' => $tiesCount, 
            'tiesPercent' => $tiesPercent, 
            'playerWonCount' => $playerWonCount, 
            'playerWonPercent' => $playerWonPercent, 
            'computerWonCount' => $computerWonCount, 
            'computerWonPercent' => $computerWonPercent,
            'rockPercent' => $rockPercent, 
            'paperPercent' => $paperPercent, 
            'scissorsPercent' => $scissorsPercent,
            'mostPlayed' => $mostPlayed
        ]);
    }

}
