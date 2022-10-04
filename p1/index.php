<?php 

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($numbers);
//var_dump($numbers);

$row_1 = ($numbers[0] + $numbers[1] + $numbers[2]);

$row_2 = ($numbers[3] + $numbers[4] + $numbers[5]);

$row_3 = ($numbers[6] + $numbers[7] + $numbers[8]);

$column_1 = ($numbers[0] + $numbers[3] + $numbers[6]);

$column_2 = ($numbers[1] + $numbers[4] + $numbers[7]);

$column_3 = ($numbers[2] + $numbers[5] + $numbers[8]);

$diagonal_1 = ($numbers[0] + $numbers[4] + $numbers[8]);

$diagonal_2 = ($numbers[2] + $numbers[4] + $numbers[6]);

$sums = array("Row 1"=>$row_1, "Row 2"=>$row_2, "Row 3"=>$row_3, "Column 1"=>$column_1, "Column 2"=>$column_2, "Column 3"=>$column_3, "Diagonal 1"=>$diagonal_1, "Diagonal 2"=>$diagonal_2);
//print implode($sums);
//var_dump($sums);

//Create an array to turn sums into their payout values
//Use 'f' statements to determine the best line
$payouts = [];
//var_dump($payouts);

$payout = null;
$bestLine = null;
$jackpot = false;
$bestSum = null;
$array = [];

foreach ($sums as $line => &$sum) {
    // var_dump($line);
    // var_dump($sum);
    //echo $line . ": " . $sum . "<br>";
        if ($sum === 6){
            echo "jackpot";
            $payout = 10000;
            $bestLine = $line;
            $bestSum = $sum;
            $jackpot = true;
            var_dump($line);
            break;
        }
        elseif ($sum === 23){
            echo "jackpot";
            $payout = 1800;
            $bestLine = $line;
            $bestSum = $sum;
            $jackpot = true;
            var_dump($line);
            break;
        }
        elseif ($sum === 24){
            echo "jackpot";
            $payout = 3600;
            $bestLine = $line;
            $bestSum = $sum;
            $jackpot = true;
            break;
        }
        elseif ($sum === 19 or $sum === 7){
            $payout = 36;
            echo $line;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 14){
            $payout = 54;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 13 or $sum === 16){
            $payout = 72;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 10){
            $payout = 80;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 12){
            $payout = 108;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 18){
            $payout = 119;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 22){
            $payout = 144;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 15 or $sum === 17){
            $payout = 180;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 11){
            $payout = 252;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 20){
            $payout = 306;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 9){
            $payout = 360;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 8){
            $payout = 720;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        elseif ($sum === 21){
            $payout = 1080;
            // $bestLine = $line;
            // $bestSum = $sum;
            $array[$line] = $payout;
            $payouts[$sum] = $payout;
            // var_dump($array);
            // continue;
        }
        echo $bestLine . " " . $sum . " payout is " . $payout . "<br>";

}

//var_dump($array);
echo $jackpot;
//echo gettype($jackpot);
if ($jackpot == 0) {
    echo "no jackpot";
    asort($array);
    asort($payouts);
    //var_dump($array);
    $payout = end($array);
    $bestLine = array_key_last($array);
    $bestSum = array_key_last($payouts);
}
var_dump($payouts);
//Write sum/payouts to array, sort array to get highest value

// elseif ($jackpot = true){
//     echo "<style>
//     #jackpot {
//         display: block !important;
//     }
//     </style>";
// }
//find way to reference the chosen line, add a "winnings" tab under "Results"
//have CSS change to reflect the outcome?
    
// foreach ($sums as $line => $sum) {
//     payouts();
// }

// function payouts() {
//     $payoutArray = array(6 => "10000",
//     7 => "36");
//     $sums = strtr($sums,$payoutArray);
// }
// elseif (in_array(6, $sums)){
//     echo "Jackpot! 10000!";
// } elseif (in_array(23, $sums)){
//     echo "Jackpot! 1800!";
// } elseif (in_array(24, $sums)){
//     echo "Jackpot! 3600!";
// }

require "index-view.php";