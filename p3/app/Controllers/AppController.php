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
}
