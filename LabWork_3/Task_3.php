<?php
    $lastName = $_GET['lname'];
    $firstName = $_GET['fname'];
    $age = $_GET['age'];
    $email = $_GET['email'];
    
    $ass_arr = ["Habzovskyi" => ["Andrew", 20, "andrii.habzovskyi@gmail.com"], "Isaac" => ["Oscar", 50, "oscar.isaac@gmail.com"]];
    $count = 2;

    $count = $count + 1;
    $ass_arr[$lastName][0] = $firstName;
    $ass_arr[$lastName][1] = $age;
    $ass_arr[$lastName][2] = $email;

    echo "<table border = \"1\">";
        echo "<tr>";
            echo "<th>Last name</th>";
            echo "<th>First name</th>";
            echo "<th>Age</th>";
            echo "<th>Email</th>";
        echo "</tr>";

        foreach($ass_arr as $i => $i_d) {                    
            echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$i_d[0]</td>";
                echo "<td>$i_d[1]</td>";
                echo "<td>$i_d[2]</td>";
            echo "</tr>";
        }
    echo "</table>";
?>