<?php
    $number = $_GET['number'];
    $numberToGuess = 13;

    if ($number == $numberToGuess) {
        echo '<span style="color:#FF1400;">CORRECT!</span>';
    } else if ($number < $numberToGuess) {
        echo "Hidden number is bigger.", "<br/>";

        echo "<a>Try again!</a>";
        echo "<form action = \"Task_7_and_8.php\" method = \"get\">";
        echo "    Try to guess a number:  <input type = \"text\" name = \"number\" />";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Guess\" />";
        echo "</form>";
    } else if ($number > $numberToGuess) {
        echo "Hidden number is less.", "<br/>";

        echo "<a>Try again!</a>";
        echo "<form action = \"Task_7_and_8.php\" method = \"get\">";
        echo "    Try to guess a number:  <input type = \"text\" name = \"number\" />";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Guess\" />";
        echo "</form>";
    }
    echo "<a href=\"index.html\">HOME PAGE</a>";
?>