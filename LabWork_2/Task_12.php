<?php
    $number = $_GET['number'];
    $numberToGuess = 13;

    $text = "";

    if ($number == $numberToGuess) {
        $text = "CORRECT!";
    } else if ($number < $numberToGuess) {
        $text = "Hidden number is bigger.";

        echo "<a>Try again!</a>";
        echo "<form action = \"Task_12.php\" method = \"get\">";
        echo "    Try to guess a number:  <input type = \"text\" name = \"number\" />";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Guess\" />";
        echo "</form>";
    } else if ($number > $numberToGuess) {
        $text = "Hidden number is less.";

        echo "<a>Try again!</a>";
        echo "<form action = \"Task_12.php\" method = \"get\">";
        echo "    Try to guess a number:  <input type = \"text\" name = \"number\" />";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Guess\" />";
        echo "</form>";
    }
    echo "<script type='text/javascript'>alert('$text')</script>";
    echo "<a href=\"index.html\">HOME PAGE</a>";
?>