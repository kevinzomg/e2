<?php
session_start();
$radioChosen = true;
var_dump($_SESSION["numbers"]);
$test = false;

if (isset($_POST['squareChoice']))
  {
    $radioChosen = true;
    $test = true;
    $squareChoice = $_POST['squareChoice'];
  }
else {
    $radioChosen = false;
}
if (isset($_POST['resetRadio']))
  {
  session_unset();
  }
    $_SESSION['results'] = [
      'radioChosen' => $radioChosen,
    ];
    $_SESSION['test'] =  [
      'test' => $test
    ];
    $_SESSION['squareChoice'] = [
      'squareChoice' => $squareChoice
    ];
header('Location: index.php');