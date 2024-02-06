<?php

    class Product {

        private $id;
        private $title;
        private $image;
        private $price;  
        private $category;

        // costruttore
        public function __construct($id, $title, $image, $price,Category $category) {

            $this -> setId($id);
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($price);
            $this -> setCategory($category);
        }

        // get e set id
        public function getId() {
            return $this -> id;
        }
        public function setId($id) {
            $this -> id = $id;
        }

        // get e set title
        public function getTitle() {
            return $this -> title;
        }
        public function setTitle($title) {
            $this -> title = $title;
        }

        // get e set image
        public function getImage() {
            return $this -> image;
        }
        public function setImage($image) {
            $this -> image = $image;
        }

        // get e set price
        public function getPrice() {
            return $this -> price;
        }
        public function setPrice($price) {
            $this -> price = $price;
        }

        // get e set category
        public function getCategory() {
            return $this -> category;
        }
        public function setCategory(Category $category) {
            $this -> category = $category;
        }
    }
?>