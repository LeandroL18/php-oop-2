<?php

    class Food extends Product {

        private static $typology = "Cibo";
        private $expireDate;

        // costruttore
        public function __construct($id, $title, $image, $price, Category $category, $expireDate) {

            $this -> setId($id);  
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($price); 
            $this -> setCategory($category);
            $this -> setExpireDate($expireDate);
        }

        // get e set expireDate
        public function getExpireDate() {
            return $this -> expireDate;
        }
        public function setExpireDate($expireDate) {
            $this -> expireDate = $expireDate;
        }

        // get typology
        public function getTypology() {
            return self :: $typology;
        }
    }