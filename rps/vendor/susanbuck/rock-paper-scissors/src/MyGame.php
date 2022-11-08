<?php

namespace RPS;

class MyGame extends Game
{
    protected $moves = ['heads', 'tails'];
    protected function determineOutcome($playerMove, $computerMove)
    {
        if ($playerMove == 'heads' and $computerMove == 'tails') {
            return 'won';
        } else {
            return 'lost';
        }
    }
}