<?php include_once('index.php');?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Project 1</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Test your luck and try to get the highest score within 3 tries</li>
        <li>The game starts as a 3x3 grid, each section represented by a number 1-9; there are no repeated numbers</li>
        <li>One number is revealed initially, and the player will have 3 chances to uncover a number</li>
        <ul>
            <li>For the purposes of this assignment, all numbers will be revealed</li>
        </ul>
        <li>After uncovering 3 numbers for a total of 4 revealed numbers, the player will then choose one line of
            numbers</li>
        <li>Each number in a line is added together, and the final tally will determine the amount of points the player
            will receive</li>
        <ul>
            <li>For the purposes of this assignment, the row with the highest payout will be selected</li>
        </ul>
    </ul>

    <h2>Results</h2>
    <table>
        <tr>
            <td>
                <h3><?php print $numbers[0];?></h3>
            </td>
            <td>
                <h3><?php print $numbers[1];?></h3>
            </td>
            <td>
                <h3><?php print $numbers[2];?></h3>
            </td>
        </tr>
        <tr>
            <td>
                <h3><?php print $numbers[3];?></h3>
            </td>
            <td>
                <h3><?php print $numbers[4];?></h3>
            </td>
            <td>
                <h3><?php print $numbers[5];?></h3>
            </td>
        </tr>
        <tr>
            <td>
                <h3><?php print $numbers[6];?></h3>
            </td>
            <td>
                <h3><?php print $numbers[7];?></h3>
            </td>
            <td>
                <h3><?php print $numbers[8];?></h3>
            </td>
        </tr>
    </table><br>

    Points: <?php print $payout;?><br>
    Best line: <?php print $bestLine;?><br>
    Sum: <?php print $bestSum;?>
    <h3 id='jackpot'>Jackpot!</h3>

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