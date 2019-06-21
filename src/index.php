<?php 
namespace MiniJeu;

require "vendor/autoload.php";

use \PDO;
use MiniJeu\Model\Classes\Character;
use MiniJeu\Controller\CharacterController;
use MiniJeu\Model\Dao\CharacterDao;



$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);


if (!isset($page))
{
    $page = "home";
}

switch ($page)
{
    case "home":
        include "src/View/Template/home.html";
        break;
    case "pickCharacter":
        include "src/View/Template/pickYourCharacter.html";
        break;
    case "Zeratul":
        CharacterController::listAction();
        break;
    case "Grisetête";
        $grisetete = New Character;
        var_dump($grisetete);
        break;
    case "Valyria";
      $dao = new CharacterDao();
      $dao->insert("Valyria", 100,100,100);
      var_dump($dao);
        break;
    case "KaelThas";
        break;
 
    default:
        $message = "Erreur 404 : Page inconnue&nbsp;!";
        include "View/Template/erreur.html";
        break;
}


