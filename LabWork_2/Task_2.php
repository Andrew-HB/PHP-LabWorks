<?php
    $firstNumber = $_GET['first_number'];
    $secondNumber = $_GET['second_number'];

    if ($firstNumber > $secondNumber) {
        echo "$firstNumber > $secondNumber";
    } elseif ($firstNumber < $secondNumber) {
        echo "$firstNumber < $secondNumber";
    } else {
        echo "$firstNumber = $secondNumber";
    }
?>