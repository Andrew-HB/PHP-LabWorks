<?php
    $nickname = $_GET['nickname'];
    $password = $_GET['password'];

    $dataBase = [
        "Andrew-HB" => "qwerty",
        "log1" => "123",
        "log2" => "1234",
        "log3" => "12345",
        "log4" => "123456",
    ];

    if ($dataBase[$nickname]) {
        if ($password == $dataBase[$nickname]){
            echo "You have successfully logged in!";
        } else {
            echo $nickname, ", please check your password!";
        }
    } else {
        echo "Wrong nickname!";
    }

?>