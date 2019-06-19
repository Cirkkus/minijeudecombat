<?php

    class Character {

        private $id;
        private $name;
        private $life;
        private $strength;
        private $exp;
        private $level;
      

       

        public function __construct(){
            $this->$id = $id;
            $this->name = $name;
            $this->life = $life;
            $this->strength = $strength;
            $this->exp = $exp;
            $this->level = $level;
         
        }

        public function getId(){
            return $this->$id;
        }
    

        public function getName(){
            return $this->$name;
        }
    

        public function getLife(){
            return $this->$life;
        }
    

        public function getStrength(){
            return $this->$strength;
        }
    

        public function getExp(){
            return $this->$exp;
        }

        public function getLevel(){
            return $this->$level;
        }

        public function setId($id){
            $id = (int) $id;
            if ($id >= 0 && $id < 999) {
                $this->id = $id;}
        } 

        public function setName($name){
            if (is.string($name)) {
                $this->name = $name;
            } 
        }

        public function setLife($life) {
             $life = (int) $life;
            if ($life >= 0 && $life <= 200) {
                $this->life = $life;
            } 
        }

        public function setStrength($strength){
            $strength = (int) $strength;
            if ($strength >= 0 && $strength <= 50) {
                $this->strength = $strength;
            } 
        } 

        public function setExp($exp){
            $exp = (int) $exp;
            if ($exp >= 0 && $exp <= 100) {
                $this->exp = $exp;
            } 
        } 
        
        public function setLevel($level){
            $level = (int) $level;
            if ($level >= 0 && $level <= 50) {
                $this->level = $level;
            } 
        } 
   
   
    }