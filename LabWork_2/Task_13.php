<?php
    $initialNumber = $_GET['Initial'];
    $finalNumber = $_GET['Final'];
    $iterator = 1;

    do{
        echo "$iterator hours passed: $initialNumber bacteria.", "<br/>";
        $iterator++;
        $initialNumber *= 2;
    } while ($initialNumber < $finalNumber);
?>