<html>
    <head>
        <title>LabWork_3</title>
    </head>
    <body>
        <?PHP
            echo "<br/>Task 1", "<br/>";
            $arr = [1, 2, 3, 4, 5];
        
            foreach($arr as $i) {
                echo "$i ^ 2 = ", $i * $i."<br/>";
            }
            
            echo "<br/>";
            echo "<br/>";
            #---------------------------

            echo "<br/>Task 2", "<br/>";
            $ass_arr = ["Ukraine" => ["Kyiv", 44.1], "Poland" => ["Warsaw", 38.1], "Germany" => ["Berlin", 83.1]];

            echo "<table border = \"1\">";
                echo "<tr>";
                    echo "<th>Country</th>";
                    echo "<th>Capital</th>";
                    echo "<th>Population</th>";
                echo "</tr>";

                foreach($ass_arr as $i => $i_d) {                    
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>$i_d[0]</td>";
                        echo "<td>$i_d[1] millions</td>";
                    echo "</tr>";
                }
            echo "</table>";

            echo "<br/>";
            echo "<br/>";
            #---------------------------

            echo "<br/>Task 3", "<br/>";
            echo "<a>\"Registration\"</a>";
            echo "<form action = \"Task_3.php\" method = \"get\">";
            echo "    Last name:      <input type = \"text\" name = \"lname\" /><br/>";
            echo "    First name:     <input type = \"text\" name = \"fname\" /><br/>";
            echo "    Age:            <input type = \"text\" name = \"age\" /><br/>";
            echo "    Email:          <input type = \"text\" name = \"email\" /><br/>";
            echo "    <input type = \"submit\" name = \"submit\" value = \"Sign up\" /><br/>";
            echo "</form>";

            echo "<br/>";
            echo "<br/>";
            #---------------------------

            echo "<br/>Task 4", "<br/>";
            $arr1 = [];
            $arr2 = [];
            for ($i = 0; $i < 10; $i++) {
                array_push($arr1, ($i + 1 + 10) * ($i + 1 + 10));
                array_push($arr2, ($i + 1) * ($i + 1) * ($i + 1));
            }

            $arr = [];
            for ($i = 0; $i < 10; $i++) {
                array_push($arr, $arr1[$i]);
                array_push($arr, $arr2[$i]);
            }

            for ($i = 0; $i < 20; $i++) {
                echo "$arr[$i] ";
            }
        ?>
    </body>
</html>