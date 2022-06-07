<html>
    <head>
        <title>LabWork 8</title>
    </head>
    <body>
        <?php
            include 'includes/MultiplicationTable.inc.php';
            $table_4 = new MultiplicationTable(4);
            $table_4->PrintTable();

            echo "<br/>";
            echo "<br/>";
            #---------------------------

            include 'includes/Country.inc.php';
            $countryArr = [ new Country("Ukraine", "Kyiv", "41.1 m."), 
                            new Country("Poland", "Warsaw", "38.1 m."), 
                            new Country("Romania", "Bucharest", "19.1 m.")];

            echo "<table border = \"1\">";
                echo "<tr>";
                    echo "<th>Country</th>";
                    echo "<th>Capital</th>";
                    echo "<th>Population</th>";
                echo "</tr>";

                foreach($countryArr as $i) {                    
                    echo "<tr>";
                        echo "<td>$i->name</td>";
                        echo "<td>$i->capital</td>";
                        echo "<td>$i->population</td>";
                    echo "</tr>";
                }
            echo "</table>";

            echo "<br/>";
            echo "<br/>";
            #---------------------------

            echo "<form action = \"registration.php\" method = \"get\">";
            echo "    Name:           <input type = \"text\" name = \"name\" /><br/>";
            echo "    Last Name:      <input type = \"text\" name = \"lName\" /><br/>";
            echo "    Age:            <input type = \"text\" name = \"age\" /><br/>";
            echo "    Email:          <input type = \"text\" name = \"email\" /><br/>";
            echo "    <input type = \"submit\" name = \"submit\" value = \"Sign up\" /><br/>";
            echo "</form>";

            echo "<br/>";
            echo "<br/>";
            #---------------------------

            include 'includes/Dispatcher.inc.php';
            $calc = new Calculator();
            $dp = new Dispatcher($calc);

            if ($dp->dispatch(13, 7)) {
                $dp->display();
            }
        ?>
    </body>
</html>