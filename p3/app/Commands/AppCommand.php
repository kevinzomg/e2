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
        'payout' => 0,
        'totalPayout' => 0
    ];

    $this->app->db()->insert('game', $game);
}
    public function reset()
    {
        $this->app->db()->createTable('game', [
            'gameNum' => 'int',
            'payout' => 'int',
            'totalPayout' => 'int',
        ]);
    }
}