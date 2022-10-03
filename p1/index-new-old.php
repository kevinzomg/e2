<?php 

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($numbers);
//var_dump($numbers);
$sums = [
'row_1' => [
'sum' => ($numbers[0] + $numbers[1] + $numbers[2])
],//print "<br>row 1 total is $row_1 <br>";

'row_2' => [
'sum' => ($numbers[3] + $numbers[4] + $numbers[5])
],//print "row 2 total is $row_2<br>";

'row_3' => [
'sum' => ($numbers[6] + $numbers[7] + $numbers[8]),
],//print "row 3 total is $row_3<br>";

'column_1' => [
'sum' => ($numbers[0] + $numbers[3] + $numbers[6]),
],//print "column 1 total is $column_1<br>";

'column_2' => [
'sum' => ($numbers[1] + $numbers[4] + $numbers[7]),
],//print "column 2 total is $column_2<br>";

'column_3' => [
'sum' => ($numbers[2] + $numbers[5] + $numbers[8]),
],//print "column 3 total is $column_3<br>";

'diagonal_1' => [
'sum' => ($numbers[0] + $numbers[4] + $numbers[8]),
],//print "diagonal 1 total is $diagonal_1<br>";

'diagonal_2' => [
'sum' => ($numbers[2] + $numbers[4] + $numbers[6]),
//print "diagonal 2 total is $diagonal_2<br>";
]
];
//var_dump($sums);
$sumarray = [];
foreach ($sums as $sumout) {
    foreach ($sumout as $sumoutput) {
        echo $sumoutput . '<br>';
        array_push($sumarray, $sumoutput);
    }
}
var_dump($sumout);
var_dump($sumoutput);
var_dump($sumarray);
//echo strval($sumoutput);
//$sums = array("Row 1"=>$row_1, "Row 2"=>$row_2, "Row 3"=>$row_3, "Column 1"=>$column_1, "Column 2"=>$column_2, "Column 3"=>$column_3, "Diagonal 1"=>$diagonal_1, "Diagonal 2"=>$diagonal_2);
//print implode($sums);
//var_dump($sums);

//Create an array to turn sums into their payout values
//Use 'if' statements to determine the best line
$payouts = [
    10000 => [6],
    36 => [7],
    720 => [8],
    360 => [9],
    80 => [10],
    252 => [11],
    108 => [12],
    72 => [13],
    54 => [14],
    180 => [15],
    72 => [16],
    180 => [17],
    119 => [18],
    36 => [19],
    306 => [20],
    1080 => [21],
    144 => [22],
    1800 => [23],
    3600 => [24]
];
var_dump($payouts);

foreach ($sums as $line => $sum) {
        if ($sum == 6){
            echo "1 2 3! Jackpot!";
            print_r(array_keys($sums, 6));
        }
        elseif ($sum == 24){
            echo "7 8 9! Jackpot!";
        }
        elseif ($sum == 23){
            echo "23 total! Jackpot!";
        }
}
var_dump(strval($sumoutput));
 $conversion = [];
 foreach ($sums as $sumout) {
    foreach ($sumout as $sumoutput) {
        echo $sumoutput;
        if (strval($sumoutput) == (array_keys($payouts))) 
        $conversion = strtr($sumoutput, $payouts);
    }
}
var_dump($conversion);
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
// if (in_array(6, $sums)){
//     echo "Jackpot! 10000!";
// } elseif (in_array(23, $sums)){
//     echo "Jackpot! 1800!";
// } elseif (in_array(24, $sums)){
//     echo "Jackpot! 3600!";
// }

require "index-view.php";