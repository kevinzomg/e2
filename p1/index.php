<?php 

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($numbers);
var_dump($numbers);

$row_1 = ($numbers[0] + $numbers[1] + $numbers[2]);
print "<br>row 1 total is $row_1 <br>";

$row_2 = ($numbers[3] + $numbers[4] + $numbers[5]);
print "row 2 total is $row_2<br>";

$row_3 = ($numbers[6] + $numbers[7] + $numbers[8]);
print "row 3 total is $row_3<br>";

$column_1 = ($numbers[0] + $numbers[3] + $numbers[6]);
print "column 1 total is $column_1<br>";

$column_2 = ($numbers[1] + $numbers[4] + $numbers[7]);
print "column 2 total is $column_2<br>";

$column_3 = ($numbers[2] + $numbers[5] + $numbers[8]);
print "column 3 total is $column_3<br>";

$diagonal_1 = ($numbers[0] + $numbers[4] + $numbers[8]);
print "diagonal 1 total is $diagonal_1<br>";

$diagonal_2 = ($numbers[2] + $numbers[4] + $numbers[6]);
print "diagonal 2 total is $diagonal_2<br>";

$sums = array("Row 1"=>$row_1, "Row 2"=>$row_2, "Row 3"=>$row_3, "Column 1"=>$column_1, "Column 2"=>$column_2, "Column 3"=>$column_3, "Diagonal 1"=>$diagonal_1, "Diagonal 2"=>$diagonal_2);
print implode($sums);

//Create an array to turn sums into their payout values
//Use 'if' statements to determine the best line

require "index-view.php";