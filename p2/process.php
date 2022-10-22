<?php
session_start();
$radioChosen = true;
$lineChoice = false;
if ($_POST['squareChoice'] == "square1" || "square2" || "square3" || "square4" || "square5" ||  "square6"  || "square7" || "square8" || "square9") {
  $radioChosen = true;
  $squareChoice = $_POST['squareChoice'];
}
else {
  $radioChosen = false;
}
if ($_POST['lineChoice'] == true) {
  $lineChoice = true;
  $lineChoice = $_POST['lineChoice'];
  $_SESSION['lineChoice'] = $lineChoice;
}
else {
  $lineChoice = false;
}
if (isset($_POST['resetBox'])) {
  session_unset();
  $radioChosen = false;
  }
if ($_POST['squareChoice'] == "reset") {
    session_unset();
    $radioChosen = false;
  }
    $_SESSION['results'] = [
      'radioChosen' => $radioChosen,
    ];
    $_SESSION['squareChoice'] = [
      'squareChoice' => $squareChoice,
    ];
if ($_POST['lineChoice']) {
    $_SESSION['lineChoice'] = [
      'lineChoice' => $lineChoice
    ];
}
header('Location: index.php');