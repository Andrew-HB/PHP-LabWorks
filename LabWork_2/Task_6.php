<?php
    $number = $_GET['number'];

    if ($number === (string)(int)$number) {
         echo '"', $number, '"', " is an integer!";
    } else {
         echo '"', $number, '"', " is not an integer!";
    }
?>