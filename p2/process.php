<?php
session_start();
$selectionCount = null;
$radioChosen = true;
$numberArray = $_SESSION["numbers"];
var_dump($numberArray);
//$test == true;
var_dump($_SESSION["numbers"]);
//require 'index.php';

if (isset($_POST['squareChoice'])){   // if ANY of the options was checked
    echo $_POST['squareChoice'];    // echo the choice
    $selectionCount ++;
    echo $selectionCount . " radios selected";
    $radioChosen = true;
    //$selectionCount = $_SESSION["selectionCount"];
  //   $_SESSION['results'] = [
  //     'radioChosen' => $radioChosen,
  //     'correct' => $correct,
  // ];
}
else {
    echo "nothing was selected.";
    $radioChosen = false;
}
if (isset($_POST['resetRadio'])){
  session_unset();
}
//   if ($selectionCount == 3) {
//     echo "ALL RADIOS SELECTED";
//     session_unset();
//   }
    $_SESSION['results'] = [
      'radioChosen' => $radioChosen,
      //'correct' => $correct,
];

header('Location: index.php');
//exit();