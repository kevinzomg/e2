<?php 
session_start();
if (!isset($_SESSION["numbers"])) {
    newGame();
    echo "no session set ";
    var_dump($_SESSION["numbers"]);
;}
else {
    echo "session already set ";
    var_dump($_SESSION["numbers"]);
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

//
// Need some kind of form to submit to execute an session_unset() command
//
//$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//shuffle($numbers);
// $_SESSION["numbers"]=$numbers;
//$radioChosen = [];
//$selectionCount = null;
//$radioChosen = $_SESSION['radioChosen'];
if ($_SESSION['results']['radioChosen'] == true) {
    //$_SESSION['results']['selectionCount'] ++;
    $_SESSION['selectionCount'] ++;
    //array_push($_SESSION['squareChoice'], $_SESSION['squareChoice']);
    //echo $squareChoice . " CHOSEN";
}
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $radioChosen = $results['radioChosen'];
    //$_SESSION['results'] = null;
    echo "results check";
}
//$test = $_SESSION['test'];
if ($_SESSION['test'] == true) {
    var_dump($_SESSION['test']);
}
if (in_array("square1", $_SESSION['squareChoice'])) {
    echo "<style>
    #sq1 {
        color: red;
    }
    </style>";
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

if ($jackpot == 1){
    echo "<style>
    #jackpot {
        display: block !important;
        color: red;
    }
    </style>";
}
if ($jackpot == 0) {
    asort($array);
    asort($payouts);
    $payout = end($array);
    $bestLine = array_key_last($array);
    $bestSum = array_key_last($payouts);
    echo "<style>
    #jackpot {
        display: none;
    }
    </style>";
}
if ($bestLine == "Row 1") {
    echo "<style>
    #sq1, #sq2, #sq3 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Row 2") {
    echo "<style>
    #sq4, #sq5, #sq6 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Row 3") {
    echo "<style>
    #sq7, #sq8, #sq9 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Column 1") {
    echo "<style>
    #sq1, #sq4, #sq7 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Column 2") {
    echo "<style>
    #sq2, #sq5, #sq8 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Column 3") {
    echo "<style>
    #sq3, #sq6, #sq9 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Diagonal 1") {
    echo "<style>
    #sq1, #sq5, #sq9 {
        background-color: greenyellow;
    }
    </style>";
}
if ($bestLine == "Diagonal 2") {
    echo "<style>
    #sq3, #sq5, #sq7 {
        background-color: greenyellow;
    }
    </style>";
}
var_dump($_SESSION['results']);
var_dump($_SESSION['selectionCount']);
var_dump($_SESSION['squareChoice']);
require "index-view.php";