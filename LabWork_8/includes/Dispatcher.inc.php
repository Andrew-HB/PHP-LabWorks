<?php
    include 'includes/Calculator.inc.php';

    class Dispatcher {
        private $calculator;

        function __construct($calc) {
            $this->calculator = $calc;
        }

        function dispatch($a, $b) {
            if ($a != null && $b != null && is_numeric($a) && is_numeric($b)) {
                $this->calculator->a = $a;
                $this->calculator->b = $b;
                return true;
            } else {
                echo "Invalid data!";
                return false;
            }
        }

        function display() {
            $this->calculator->Add($this->calculator->a, $this->calculator->b);
            $this->calculator->Subtract($this->calculator->a, $this->calculator->b);
            $this->calculator->Multiply($this->calculator->a, $this->calculator->b);
            $this->calculator->Divide($this->calculator->a, $this->calculator->b);
            $this->calculator->Mod($this->calculator->a, $this->calculator->b);
            $this->calculator->Pow($this->calculator->a, $this->calculator->b);
            $this->calculator->Sqrt($this->calculator->a);
        }
    }
?>