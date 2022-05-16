<?php
    function MultiplicationTable($num) {
        for ($i = 2; $i <= 10; $i++) {
            echo "$num * $i = ", $num * $i, "<br/>";
        }
        echo "<br/>", "<br/>";
    }

    for ($i = 1; $i <= 9; $i++) {
        MultiplicationTable($i);
    }
?>