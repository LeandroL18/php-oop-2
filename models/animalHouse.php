<?php

    class AnimalHouse extends Product {

        private static $typology = "Cucce";
        private $internalSize;

        // costruttore
        public function __construct($id, $title, $image, $price, Category $category, $internalSize) {

            $this -> setId($id);
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($price);
            $this -> setCategory($category);
            $this -> setInternalSize($internalSize);
        }

        // get e set internalSize
        public function getInternalSize() {
            return $this -> internalSize;
        }
        public function setInternalSize($internalSize) {
            $this -> internalSize = $internalSize;
        }

        // get typology
        public function getTypology() {
            return self :: $typology;
        }
    }
?>