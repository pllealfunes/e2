<?php

$playerOne = null;
$playerTwo = null;
$winner = null;
$mysteryNumber = rand(1, 10);
$results = [];

while ($playerOne != $mysteryNumber || $playerTwo != $mysteryNumber) {
    $playerOne = rand(1, 10);
    $playerTwo = rand(1, 10);
    
    if ($playerOne == $mysteryNumber and $playerTwo != $mysteryNumber) {
        $results[] = [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'message' => 'Winner Player One!'
        ];
        $winner = 'Winner Player One!';
        break;
    } elseif ($playerTwo == $mysteryNumber and $playerOne != $mysteryNumber) {
        $results[] = [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'message' => 'Winner Player Two!'
        ];
        $winner = 'Winner Player Two!';
        break;
    } elseif ($playerOne > $mysteryNumber and $playerTwo > $mysteryNumber) {
        $results[] = [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'message' => 'Players Guessed Too High!'
        ];
    } elseif ($playerOne < $mysteryNumber and $playerTwo < $mysteryNumber) {
        $results[] = [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'message' => 'Players Guessed Too Low!'
        ];
    } elseif ($playerOne < $mysteryNumber and $playerTwo > $mysteryNumber) {
        $results[] = [
        'playerOne' => $playerOne,
        'playerTwo' => $playerTwo,
        'message' => 'Player One Guessed too Low and Player Two Guessed Too High!'
    ];
    } elseif ($playerOne > $mysteryNumber and $playerTwo < $mysteryNumber) {
        $results[] = [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'message' => 'Player One Guessed too High and Player Two Guessed Too Low!'
        ];
    } else {
        $results[] = [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'message' => 'Both Players Lose!'
        ];
        $winner = 'Both Players Lose!';
    }
}
require 'index-view.php';
