<?php

    class Category {

        private $id;
        private $name;
        private $icon;

        // costruttore
        public function __construct($id, $name, $icon) {

            $this -> setId($id);
            $this -> setName($name);
            $this -> setIcon($icon);
        }

        // get e set id
        public function getId() {
            return $this -> id;
        }
        public function setId($id) {
            $this -> id = $id;
        }

        // get e set name
        public function getName() {
            return $this -> name;
        }
        public function setName($name) {
            $this -> name = $name;
        }

        // get e set icon
        public function getIcon() {
            return $this -> icon;
        }
        public function setIcon($icon) {
            $this -> icon = $icon;
        }
    }