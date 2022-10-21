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
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
            </tr>
            <tr>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td id='sq1' class="<?php if ($sq1 == true) echo 'best-line'; if ($num1 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num1 == true) echo 'picked';?>"
                        name="squareChoice" value="square1">
                    <h3 class="numDisplay<?php if ($num1 == true) echo ' numPick';?>" id="num1">
                        <?php print $_SESSION['numbers'][0];?></h3>
                    </input>
                </td>
                <td id='sq2' class="<?php if ($sq2 == true) echo 'best-line'; if ($num2 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num2 == true) echo 'picked';?>"
                        name="squareChoice" value="square2">
                    <h3 class="numDisplay<?php if ($num2 == true) echo ' numPick';?>" id="num2">
                        <?php print $_SESSION['numbers'][1];?></h3>
                    </input>
                </td>
                <td id='sq3' class="<?php if ($sq3 == true) echo 'best-line'; if ($num3 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num3 == true) echo 'picked';?>"
                        name="squareChoice" value="square3">
                    <h3 class="numDisplay<?php if ($num3 == true) echo ' numPick';?>" id="num3">
                        <?php print $_SESSION['numbers'][2];?></h3>
                    </input>
                </td>
            </tr>
            <tr>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td id='sq4' class="<?php if ($sq4 == true) echo 'best-line'; if ($num4 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num4 == true) echo 'picked';?>"
                        name="squareChoice" value="square4">
                    <h3 class="numDisplay<?php if ($num4 == true) echo ' numPick';?>" id="num4">
                        <?php print $_SESSION['numbers'][3];?></h3>
                    </input>
                </td>
                <td id='sq5' class="<?php if ($sq5 == true) echo 'best-line'; if ($num5 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num5 == true) echo 'picked';?>"
                        name="squareChoice" value="square5">
                    <h3 class="numDisplay<?php if ($num5 == true) echo ' numPick';?>" id="num5">
                        <?php print $_SESSION['numbers'][4];?></h3>
                    </input>
                </td>
                <td id='sq6' class="<?php if ($sq6 == true) echo 'best-line'; if ($num6 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num6 == true) echo 'picked';?>"
                        name="squareChoice" value="square6">
                    <h3 class="numDisplay<?php if ($num6 == true) echo ' numPick';?>" id="num6">
                        <?php print $_SESSION['numbers'][5];?></h3>
                    </input>
                </td>
            </tr>
            <tr>
                <td><input type="radio" class="lineChoice<?php if ($p2 == true) echo ' p2';?>" id="" name="lineChoice"
                        value=""></td>
                <td id='sq7' class="<?php if ($sq7 == true) echo 'best-line'; if ($num7 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num7 == true) echo 'picked';?>"
                        name="squareChoice" value="square7">
                    <h3 class="numDisplay<?php if ($num7 == true) echo ' numPick';?>" id="num7">
                        <?php print $_SESSION['numbers'][6];?></h3>
                    </input>
                </td>
                <td id='sq8' class="<?php if ($sq8 == true) echo 'best-line'; if ($num8 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num8 == true) echo 'picked';?>"
                        name="squareChoice" value="square8">
                    <h3 class="numDisplay<?php if ($num8 == true) echo ' numPick';?>" id="num8">
                        <?php print $_SESSION['numbers'][7];?></h3>
                    </input>
                </td>
                <td id='sq9' class="<?php if ($sq9 == true) echo 'best-line'; if ($num9 == true) echo ' picked';?>">
                    <input type="radio" class="radioClass" id="<?php if ($num9 == true) echo 'picked';?>"
                        name="squareChoice" value="square9">
                    <h3 class="numDisplay<?php if ($num9 == true) echo ' numPick';?>" id="num9">
                        <?php print $_SESSION['numbers'][8];?></h3>
                    </input>
                </td>
            </tr>

    </table>
    <label for="resetBox">Reset?</label>
    <input type="checkbox" id="resetCheck" name="squareChoice" value="reset">
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
    if ($p2 == true) {
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