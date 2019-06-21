<?php

namespace MiniJeu\Model\Classes;
use MiniJeu\Model\Dao\CharacterDao;
use \InvalidArgumentException;

    class Character {

        private $id;
        private $name;
        private $life;
        private $strength;
        private $level;
      

     
        public function __construct()
        {
            $nb = func_num_args();
            switch ($nb)
            {
                case 0:
                    $this->construct_0();
                    break;
                case 5:
                    $id = func_get_arg(0);
                    $name = func_get_arg(1);
                    $life = func_get_arg(2);
                    $strength = func_get_arg(3);
                    $level= func_get_arg(4);
                    $this->construct_5($id, $name, $life, $strength, $level);
                    break;
                default:
                    throw new InvalidArgumentException("Invalid parameters number");
                    break;
            }
        }
    
        private function construct_0()
        {
            // valeurs par défaut
            $this->id = null;
            $this->name = "";
            $this->life = 0;
            $this->strength = 0;
            $this->level = 0;
        }
    
        private function construct_5($id, $name, $life, $strength, $level)
        {
            // valeurs fournies en paramètres
            $this->id = $id;
            $this->name = $name;
            $this->life = $strength;
            $this->strength = $naissance;
            $this->level = $level;
        }
    
        public function __toString()
        {
            return $this->name;
        }
    
        public static function getAll()
        {
            $dao = new CharacterDao();
            return $dao->getAll();
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

        public function setPx($px){
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