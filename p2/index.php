<?php 
session_start();
if (!isset($_SESSION["numbers"])) {
    newGame();
    echo "no session set ";
    //var_dump($_SESSION["numbers"]);
}
else {
    echo "session already set ";
    //var_dump($_SESSION["numbers"]);
}
function newGame() {
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    shuffle($numbers);
    $_SESSION["numbers"] = $numbers;
    echo "new game started; new array created ";
    $selectionCount = 0;
    $_SESSION['selectionCount'] = $selectionCount;
    $squareChoice = [];
    $_SESSION['squareChoice'] = $squareChoice;
}
$randArray = array("square1", "square2", "square3", "square4", "square5", "square6", "square7", "square8", "square9");

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $radioChosen = $results['radioChosen'];
}
if (isset($_SESSION['test']) && $_SESSION['test'] == true) {
}

if (!isset($_SESSION['selected'])) {
    $_SESSION['selected'] = array();
}
if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = array();
}
if (($_SESSION['selectionCount'] == 0 && (count($_SESSION['a']) == 0))) {
    array_push($_SESSION['a'], (array_rand(array_flip($randArray))));
}

$row_1 = ($_SESSION['numbers'][0] + $_SESSION['numbers'][1] + $_SESSION['numbers'][2]);

$row_2 = ($_SESSION['numbers'][3] + $_SESSION['numbers'][4] + $_SESSION['numbers'][5]);

$row_3 = ($_SESSION['numbers'][6] + $_SESSION['numbers'][7] + $_SESSION['numbers'][8]);

$column_1 = ($_SESSION['numbers'][0] + $_SESSION['numbers'][3] + $_SESSION['numbers'][6]);

$column_2 = ($_SESSION['numbers'][1] + $_SESSION['numbers'][4] + $_SESSION['numbers'][7]);

$column_3 = ($_SESSION['numbers'][2] + $_SESSION['numbers'][5] + $_SESSION['numbers'][8]);

$diagonal_1 = ($_SESSION['numbers'][0] + $_SESSION['numbers'][4] + $_SESSION['numbers'][8]);

$diagonal_2 = ($_SESSION['numbers'][2] + $_SESSION['numbers'][4] + $_SESSION['numbers'][6]);

$sums = array("Row 1"=>$row_1, "Row 2"=>$row_2, "Row 3"=>$row_3, "Column 1"=>$column_1, "Column 2"=>$column_2, "Column 3"=>$column_3, "Diagonal 1"=>$diagonal_1, "Diagonal 2"=>$diagonal_2);

$jackpot = false;
$payout = null;
$bestLine = null;
$bestSum = null;
$array = [];
$payouts = [];

foreach ($sums as $line => &$sum) {
        if ($sum === 6){
            $payout = 10000;
            $bestLine = $line;
            $bestSum = $sum;
            $jackpot = true;
            break;
        }
        elseif ($sum === 23){
            $payout = 1800;
            $bestLine = $line;
            $bestSum = $sum;
            $jackpot = true;
            break;
        }
        elseif ($sum === 24){
            $payout = 3600;
            $bestLine = $line;
            $bestSum = $sum;
            $jackpot = true;
            break;
        }
        elseif ($sum === 19 or $sum === 7){
            $payout = 36;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 14){
            $payout = 54;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 13 or $sum === 16){
            $payout = 72;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 10){
            $payout = 80;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 12){
            $payout = 108;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 18){
            $payout = 119;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 22){
            $payout = 144;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 15 or $sum === 17){
            $payout = 180;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 11){
            $payout = 252;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 20){
            $payout = 306;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 9){
            $payout = 360;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 8){
            $payout = 720;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
        elseif ($sum === 21){
            $payout = 1080;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
        }
}
$jp = null;
if ($jackpot == 1){
    $jp = true;
}
if ($jackpot == 0) {
    asort($array);
    asort($payouts);
    $payout = end($array);
    $bestLine = array_key_last($array);
    $bestSum = array_key_last($payouts);
}
$sq1 = null;
$sq2 = null;
$sq3 = null;
$sq4 = null;
$sq5 = null;
$sq6 = null;
$sq7 = null;
$sq8 = null;
$sq9 = null;
if ($bestLine == "Row 1") {
    $sq1 = true;
    $sq2 = true;
    $sq3 = true;
}
if ($bestLine == "Row 2") {
    $sq4 = true;
    $sq5 = true;
    $sq6 = true;
}
if ($bestLine == "Row 3") {
    $sq7 = true;
    $sq8 = true;
    $sq9 = true;
}
if ($bestLine == "Column 1") {
    $sq1 = true;
    $sq4 = true;
    $sq7 = true;
}
if ($bestLine == "Column 2") {
    $sq2 = true;
    $sq5 = true;
    $sq8 = true;
}
if ($bestLine == "Column 3") {
    $sq1 = true;
    $sq2 = true;
    $sq3 = true;
}
if ($bestLine == "Diagonal 1") {
    $sq1 = true;
    $sq5 = true;
    $sq9 = true;
}
if ($bestLine == "Diagonal 2") {
    $sq3 = true;
    $sq5 = true;
    $sq7 = true;
}

if (!$_SESSION['squareChoice'] == false) {
    array_push($_SESSION['selected'], array_values($_SESSION['squareChoice']));
    foreach ($_SESSION['selected'] as $subarray) {
        foreach ($subarray as $subsubarray) {
        }
    }
        if ($subsubarray !== null) {
        array_push($_SESSION['a'], $subsubarray);
        }
}
        $p2 = (count($_SESSION['a']) >= 4) ? true : false;
$num1 = null;
$num2 = null;
$num3 = null;
$num4 = null;
$num5 = null;
$num6 = null;
$num7 = null;
$num8 = null;
$num9 = null;
$num1 = (in_array("square1", $_SESSION['a'])) ? true : false;
$num2 = (in_array("square2", $_SESSION['a'])) ? true : false;
$num3 = (in_array("square3", $_SESSION['a'])) ? true : false;
$num4 = (in_array("square4", $_SESSION['a'])) ? true : false;
$num5 = (in_array("square5", $_SESSION['a'])) ? true : false;
$num6 = (in_array("square6", $_SESSION['a'])) ? true : false;
$num7 = (in_array("square7", $_SESSION['a'])) ? true : false;
$num8 = (in_array("square8", $_SESSION['a'])) ? true : false;
$num9 = (in_array("square9", $_SESSION['a'])) ? true : false;

require "index-view.php";