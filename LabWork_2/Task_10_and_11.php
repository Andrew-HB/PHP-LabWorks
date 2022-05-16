<?php
    $firstNumber = $_GET['first_number'];
    $secondNumber = $_GET['second_number'];

    if ($secondNumber < $firstNumber) {
        $temp = $secondNumber;
        $secondNumber = $firstNumber;
        $firstNumber = $temp;
    }

    for ($i = $firstNumber; $i <= $secondNumber; $i++) {
        echo "10 / $i = ", 10 / $i, "<br/>";
    }
?>