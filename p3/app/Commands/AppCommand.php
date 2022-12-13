<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function seedGame()
{
    # Set up product details
    # Note that `id` is omitted as that's created automatically using the db()->insert method
    $game = [
        'gameNum' => 0,
        'squareChoice' => 'new game',
        'lineChoice' => 'new game',
        'payout' => 0,
    ];
    $resetMove = "ALTER TABLE game AUTO_INCREMENT = 0;";

    # Insert product
    $this->app->db()->insert('game', $game);
    $this->app->db()->run($resetMove);
}
}