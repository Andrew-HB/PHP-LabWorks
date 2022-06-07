<?php
    class Calculator {
        public $a, $b;

        function Add($a, $b) {
            echo "$a + $b = ", $a + $b, "<br/>";
        }

        function Subtract($a, $b) {
            echo "$a - $b = ", $a - $b, "<br/>";
        }
        
        function Multiply($a, $b) {
            echo "$a * $b = ", $a * $b, "<br/>";
        }

        function Divide($a, $b) {
            if ($b != 0) {
                echo "$a / $b = ", $a / $b, "<br/>";
            } else {
                echo "Error! Divison by zero!";
            }
        }

        function Mod($a, $b) {
            if ($b != 0) {
                echo "$a % $b = ", $a % $b, "<br/>";
            } else {
                echo "Error! Divison by zero!";
            }
        }

        function Pow($a, $b) {
            echo "$a ^ $b = ", pow($a, $b), "<br/>";
        }

        function Sqrt($a) {
            if ($a >= 0) {
                echo "sqrt($a) = ", sqrt($a), "<br/>";
            } else {
                echo "Error! Numbers could not be negative!";
            }
        }
    }
?>