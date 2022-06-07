<?php
    class MultiplicationTable {
        private $number;

        function __construct($num) {
            $this->number = $num;
        }

        function PrintTable() {
            for ($i = 1; $i <= 9; $i++){
                echo "$this->number * $i = ", $this->number * $i, "<br/>";
            }
        }
    }
?>