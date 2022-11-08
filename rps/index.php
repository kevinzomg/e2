<?php
require __DIR__.'/vendor/autoload.php';

use RPS\Game;
use RPS\MyGame;

//$game = new Game();

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
//var_dump($game->play('rock'));

$mygame = new MyGame();

var_dump($mygame->play('heads'));