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
    <form method="POST" action="/test">
        <button type="submit">Test</button>
    </form>
    <a href="/test">Test</a>
    <h2>Results</h2>
    <table>
        <form method="POST" action="/save">

            {{ $app->old('squareChoice') }}
            <tr>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="diagonal1" name="lineChoice"
                            value="diagonal1"><label class="labelClass" for="diagonal1"><img
                                src="/images/arrow-diag1.png"></label>
                    </div>
                </td>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="column1" name="lineChoice"
                            value="column1"><label class="labelClass" for="column1"><img
                                src="/images/arrow-down.png"></label>
                    </div>
                </td>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="column2" name="lineChoice"
                            value="column2"><label class="labelClass" for="column2"><img
                                src="/images/arrow-down.png"></label>
                    </div>
                </td>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="column3" name="lineChoice"
                            value="column3"><label class="labelClass" for="column3"><img
                                src="/images/arrow-down.png"></label>
                    </div>
                </td>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="diagonal2" name="lineChoice"
                            value="diagonal2"><label class="labelClass" for="diagonal2"><img
                                src="/images/arrow-diag2.png"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="row1" name="lineChoice"
                            value="row1"><label class="labelClass" for="row1"><img
                                src="/images/arrow-right.png"></label>
                    </div>
                </td>
                <td id='sq1' class="<?php if ($sq1 == true) {
                    echo 'best-line';
                }
                if ($num1 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num1 != true) {
                        echo ' radioHide';
                    } ?>" id="<?php if ($num1 == true) {
                        echo 'picked';
                    } ?>"
                            name="squareChoice" value="square1">
                        <h3 class="numDisplay<?php if ($num1 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num1">
                            <?php print $_SESSION['numbers'][0]; ?></h3>

                </td>
                <td id='sq2' class="<?php if ($sq2 == true) {
                    echo 'best-line';
                }
                if ($num2 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num2 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num2 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square2">
                        <h3 class="numDisplay<?php if ($num2 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num2">
                            <?php print $_SESSION['numbers'][1]; ?></h3>

                </td>
                <td id='sq3' class="<?php if ($sq3 == true) {
                    echo 'best-line';
                }
                if ($num3 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num3 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num3 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square3">
                        <h3 class="numDisplay<?php if ($num3 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num3">
                            <?php print $_SESSION['numbers'][2]; ?></h3>

                </td>
            </tr>
            <tr>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="row2" name="lineChoice"
                            value="row2"><label class="labelClass" for="row2"><img
                                src="/images/arrow-right.png"></label>
                    </div>
                </td>
                <td id='sq4' class="<?php if ($sq4 == true) {
                    echo 'best-line';
                }
                if ($num4 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num4 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num4 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square4">
                        <h3 class="numDisplay<?php if ($num4 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num4">
                            <?php print $_SESSION['numbers'][3]; ?></h3>

                </td>
                <td id='sq5' class="<?php if ($sq5 == true) {
                    echo 'best-line';
                }
                if ($num5 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num5 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num5 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square5">
                        <h3 class="numDisplay<?php if ($num5 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num5">
                            <?php print $_SESSION['numbers'][4]; ?></h3>

                </td>
                <td id='sq6' class="<?php if ($sq6 == true) {
                    echo 'best-line';
                }
                if ($num6 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num6 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num6 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square6">
                        <h3 class="numDisplay<?php if ($num6 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num6">
                            <?php print $_SESSION['numbers'][5]; ?></h3>

                </td>
            </tr>
            <tr>
                <td class="arrowCell<?php if ($p2 == true) {
                    echo ' p2';
                }
                if ($end == true) {
                    echo ' e';
                } ?>">
                    <div class="arrowButton"><input type="radio" class="lineChoice" id="row3" name="lineChoice"
                            value="row3"><label class="labelClass" for="row3"><img
                                src="/images/arrow-right.png"></label>
                    </div>
                </td>
                <td id='sq7' class="<?php if ($sq7 == true) {
                    echo 'best-line';
                }
                if ($num7 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num7 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num7 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square7">
                        <h3 class="numDisplay<?php if ($num7 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num7">
                            <?php print $_SESSION['numbers'][6]; ?></h3>

                </td>
                <td id='sq8' class="<?php if ($sq8 == true) {
                    echo 'best-line';
                }
                if ($num8 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num8 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num8 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square8">
                        <h3 class="numDisplay<?php if ($num8 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num8">
                            <?php print $_SESSION['numbers'][7]; ?></h3>

                </td>
                <td id='sq9' class="<?php if ($sq9 == true) {
                    echo 'best-line';
                }
                if ($num9 == true) {
                    echo ' picked';
                } ?>">
                    <div class="button"><input type="radio" class="radioClass<?php if ($p2 == true && $num9 != true) {
                        echo ' radioHide';
                    } ?>"
                            id="<?php if ($num9 == true) {
                                echo 'picked';
                            } ?>" name="squareChoice" value="square9">
                        <h3 class="numDisplay<?php if ($num9 == true) {
                            echo ' numPick';
                        }
                        if ($end == true) {
                            echo ' end';
                        } ?>" id="num9">
                            <?php print $_SESSION['numbers'][8]; ?></h3>

                </td>
            </tr>

    </table>
    <label for="resetBox">Reset?</label>
    <input type="checkbox" id="resetCheck" name="squareChoice" value="reset">
    <input type="submit" value="Submit">
    </form><br><br>
    <h2 <?php if ($jackpot == true) {
        echo 'id="jackpot"';
    } ?>style="display:none">Jackpot!</h2>
    <h3 <?php if ($end == true) {
        echo 'id="endstats"';
    } ?>style="display:none">Payout: <?php print $payout; ?><br>
        Sum: <?php print $sum; ?><br></h3>

    <h2>Payouts</h2>
    <ul id="sumlist">Sum
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
    </ul>
    <ul id="payoutlist">Payouts
        <li class="jackpot">10000</li>
        <li>36</li>
        <li>720</li>
        <li>360</li>
        <li>80</li>
        <li>252</li>
        <li>108</li>
        <li>72</li>
        <li>54</li>
        <li>180</li>
        <li>72</li>
        <li>180</li>
        <li>119</li>
        <li>36</li>
        <li>306</li>
        <li>1080</li>
        <li>144</li>
        <li class="jackpot">1800</li>
        <li class="jackpot">3600</li>
    </ul>

    <form method="POST" action="/submit">
        <table>
            <tr>
                {{ $app->old('guess') }}
                <td><input type="number" name="guess" id="guess" value='{{ $app->old('guess') }}'>1</td>
                <td><input type="radio" name="2" value="2">2</td>
                <td><input type="radio" name="3" value="3">3</td>
                <td><input type="radio" name="4" value="4">4</td>
                <td><input type="radio" name="5" value="5">5</td>
                <td><input type="radio" name="6" value="6">6</td>
                <td><input type="radio" name="7" value="7">7</td>
                <td><input type="radio" name="8" value="8">8</td>
                <td><input type="radio" name="9" value="9">9</td>
            </tr>
        </table>
        <input type="submit" value="submit">
    @endsection
