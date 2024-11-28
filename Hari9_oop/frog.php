<?php
    require_once "animal.php";

    class Frog extends Animal {
        public function get_jump(){
            echo "Jump: Hop Hop";
        }
    }