<?php

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);
var_dump($cards);

$playerCards = [];
$computerCards = [];

while(count($cards) > 0) {
    $draw = array_pop($cards); #could also array_shift
    array_push($playerCards, $draw);
    $draw = array_pop($cards);
    array_push($computerCards, $draw);
}

 var_dump($playerCards);
 var_dump($computerCards);