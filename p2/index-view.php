<?php include_once('index.php');?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Project 2</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Test your luck and try to get the highest payout by uncovering 3 squares and picking a line</li>
        <li>The game starts as a 3x3 grid of hidden numbers. Each square is represented by a number 1-9; there are no
            repeated numbers
        </li>
        <li>One square is revealed initially, and the player will then select 3 squares to reveal</li>
        <ul>
            <li>For the purposes of this assignment, all numbers will be revealed</li>
        </ul>
        <li>After uncovering 3 numbers for a total of 4 revealed numbers, the player will then choose one line on the
            grid. 3 rows, 3 columns, and 2 diagonals mean there are 8 choices.</li>
        <li>Each number in every line is added together, and the sum of the line will determine the amount of points the
            line is worth</li>
        <ul>
            <li>For the purposes of this assignment, the row with the highest payout will be selected</li>
        </ul>
    </ul>

    <h2>Results</h2>
    <table>
        <form action="process.php" method="post">
            <tr>
                <td id='sq1' <?php if ($sq1 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio1" name="squareChoice" value="square1">
                    <h3 class="numDisplay" id="num1"><?php print $_SESSION['numbers'][0];?></h3>
                    </input>
                </td>
                <td id='sq2' <?php if ($sq2 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio2" name="squareChoice" value="square2">
                    <h3 class="numDisplay" id="num2"><?php print $_SESSION['numbers'][1];?></h3>
                    </input>
                </td>
                <td id='sq3' <?php if ($sq3 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio3" name="squareChoice" value="square3">
                    <h3 class="numDisplay" id="num3"><?php print $_SESSION['numbers'][2];?></h3>
                    </input>
                </td>
            </tr>
            <tr>
                <td id='sq4' <?php if ($sq4 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio4" name="squareChoice" value="square4">
                    <h3 class="numDisplay" id="num4"><?php print $_SESSION['numbers'][3];?></h3>
                    </input>
                </td>
                <td id='sq5' <?php if ($sq5 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio5" name="squareChoice" value="square5">
                    <h3 class="numDisplay" id="num5"><?php print $_SESSION['numbers'][4];?></h3>
                    </input>
                </td>
                <td id='sq6' <?php if ($sq6 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio6" name="squareChoice" value="square6">
                    <h3 class="numDisplay" id="num6"><?php print $_SESSION['numbers'][5];?></h3>
                    </input>
                </td>
            </tr>
            <tr>
                <td id='sq7' <?php if ($sq7 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio7" name="squareChoice" value="square 7">
                    <h3 class="numDisplay" id="num7"><?php print $_SESSION['numbers'][6];?></h3>
                    </input>
                </td>
                <td id='sq8' <?php if ($sq8 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio8" name="squareChoice" value="square8">
                    <h3 class="numDisplay" id="num8"><?php print $_SESSION['numbers'][7];?></h3>
                    </input>
                </td>
                <td id='sq9' <?php if ($sq9 == true) echo 'class="best-line"';?>>
                    <input type="radio" class="radioClass" id="numRadio9" name="squareChoice" value="square9">
                    <h3 class="numDisplay" id="num9"><?php print $_SESSION['numbers'][8];?></h3>
                    </input>
                </td>
            </tr>
    </table>

    <label for="resetRadio">Reset?</label>
    <input type="radio" id="resetRadio" name="resetRadio" value="yes">
    <input type="submit" value="Submit">
    </form><br><br>

    <h3 <?php if ($jp == true) echo 'id="jackpot"';?>style="display:none">Jackpot!</h3>
    Points: <?php print $payout;?><br>
    Best line: <?php print $bestLine;?><br>
    Sum: <?php print $bestSum;?>

    <?php if ($radioChosen == true){ ?>
    <h1 style="color: red;">radio selected</h1>
    <?php 
    echo($_SESSION['selectionCount']) . " radios selected";
    }
    else { ?> <h1>Select a button</h1> <?php } 
    if ($_SESSION['selectionCount'] == 3) {
        echo " maximum radios selected";
        echo "<style>
        .radioClass {
            display: none;
        }
        </style>";
    }
    ?>

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
</body>

</html>