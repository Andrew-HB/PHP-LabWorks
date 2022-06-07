<?php
    include 'includes/User.inc.php';

    $name = $_GET['name'];
    $lName = $_GET['lName'];
    $age = $_GET['age'];
    $email = $_GET['email'];

    if (!empty($name) and !empty($lName) and !empty($age) and !empty($email)) {
        $user = new User($name, $lName, $age, $email);
    
        $user->PrintUser();
    }

    echo "Some input is empty!";


?>