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
        'squareChoice' => 'square1',
        'lineChoice' => 'line1',
        'payout' => 0,
    ];

    # Insert product
    $this->app->db()->insert('game', $game);
}
}