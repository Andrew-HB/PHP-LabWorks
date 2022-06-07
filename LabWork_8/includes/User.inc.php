<?php
    class User {
        private $name;
        private $lastName;
        private $age;
        private $email;

        function __construct($name, $lastName, $age, $email) {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->email = $email;
        }

        function PrintUser() {
            echo "$this->name $this->lastName $this->age y.o. $this->email";
        }
    }
?>