@extends('templates/master')

@section('title')
    Project 3
@endsection

@section('content')
    <h2>Mechanics</h2>
    <ul>
        <li>Test your luck and try to get the highest payout by uncovering 3 squares and picking a line</li>
        <li>The game starts as a 3x3 grid of hidden numbers. Each square is represented by a number 1-9; there are no
            repeated numbers
        </li>
        <li>One square is revealed initially, and the player will then select 3 squares to reveal</li>
        <li>After uncovering 3 numbers for a total of 4 revealed numbers, the player will then choose one line on the
            grid. 3 rows, 3 columns, and 2 diagonals mean there are 8 choices.</li>
        <li>Each number in every line is added together, and the sum of the line will determine the amount of points the
            line is worth</li>
    </ul>

    <h2>Playing the game</h2>
    <ul>
        <li>When a new game is started, select any of the radio buttons and then use the 'Submit' button to enter your
            selection.</li>
        <li>After making 3 selections, you will be able to choose any of the lines. Select a line by clicking on the
            corresponding arrow followed by the 'Submit' button.</li>
        <li>To restart the game at any point, mark the 'Reset?' checkbox followed by the 'Submit' button.</li>
    </ul>

    <h3>Tips</h3>
    <ul>
        <li>The jackpot number combinations are (1 2 3), (7 8 9), and (6 8 9). Try to find these combinations!</li>
        <li>If there is an empty/unrevealed line and you have not uncovered any of the jackpot numbers, it is always
            worth making a guess on that line! You never know what numbers might lie there!</li>
    </ul>

    <h2>Results</h2>
    <form method="POST" action="/submit">
        <table>
            <tr>
                <td class=""><input type="radio" name="1" value="1">1</td>
            </tr>
        </table>
        <input type="submit" value="submit">
    @endsection
