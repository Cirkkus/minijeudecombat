<?php

    class Personnage {

        private $name;
        private $life;
        private $strength;
        private $classe;

        CONST CHARACTER_NAME = ["Kael'Thas","Zeratul","Valyria","Grisetête"];

        public function __construct(){
            $this->name = $name;
            $this->life = $life;
            $this->strength = $strength;
            $this->classe = $classe;
        }
    }