<?php

    trait Discount {

        private $discount = 20;

        public function getDiscount() {
            return $this -> discount;
        }

        public function setDiscount($discount) {
            $this -> discount = $discount;
        }
    }

?>