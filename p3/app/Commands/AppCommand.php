<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh() 
    {
        $this->migrate();
        $this->seed();
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'playerMove' => 'varchar(8)',
            'computerMove' => 'varchar(8)',
            'result' => 'varchar(8)',
            'won' => 'tinyint(1)',
            'tie' => 'tinyint(1)',
            'timestamp' => 'timestamp',
        ]);

        dump('Migrations complete');
    }

    public function seed()
    {
        
        $faker = Factory::create();

        for($i = 10; $i > 0; $i--) {

            $playerMove = ['rock', 'paper', 'scissors'][rand(0, 2)];

            $computerMove = ['rock', 'paper', 'scissors'][rand(0, 2)];
            
            $won = 0;

            $tie = 0;

            if ($playerMove == $computerMove) {
                $result = 'tie';
                $tie = 1;   
            } else if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
                $result = 'player';
                $won = 1;
            } else {
                $result = 'computer';
            }

            $this->app->db()->insert('rounds', [
                'playerMove' => $playerMove,
                'computerMove' => $computerMove,
                'result' => $result,
                'won' => $won,
                'tie' => $tie,
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', '-'.$i.' days')->format('Y-m-d H:i:s')
            ]);
        }

        dump('Seeds complete');
    }
    
}
