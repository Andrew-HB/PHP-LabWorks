<?php
    class Country {
        public $name;
        public $capital;
        public $population;

        function __construct($name, $capital, $population) {
            $this->name = $name;
            $this->capital = $capital;
            $this->population = $population;
        }
    }
?>