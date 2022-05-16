<?php
    $number = $_GET['number'];

    if ($number % 2 == 0) {
        echo $number, " is an even number!";
    } else {
        echo $number, " is not an even number!";
    }

?>