<?php

namespace MiniJeu\Controller;

use MiniJeu\Model\Classes\Character;
use MiniJeu\Model\Dao\CharacterDao;
use \Exception;

class CharacterController
{
  

    public static function listAction()
    {
        $type = "Personnage";
        $type_pluriel = "Personnages";
        $rows = Character::getAll();
        include "src/View/Template/list_character.html";
    }


}