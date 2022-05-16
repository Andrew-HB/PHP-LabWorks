<?php
    $nickname = $_GET['nickname'];

    $dataBase = [
        "Andrew-HB" => "Andrew Habzovskyi",
        "log1" => "Miriam Heptinstall",
        "log2" => "Clive Geis",
        "log3" => "Toby Lowe",
        "log4" => "Pamela Becker",
    ];

    if ($dataBase[$nickname]) {
        echo "Welcome, ", $dataBase[$nickname], "!";
    } else {
        echo "You are not sign up yet!";
    }

?>