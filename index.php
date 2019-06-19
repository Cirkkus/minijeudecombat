<?php 


$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);


if (!isset($page))
{
    $page = "home";
}

switch ($page)
{
    case "home":
        include "View/Template/home.html";
        break;
    case "pickCharacter":
        include "View/Template/pickYourCharacter.html";
        break;
    case "Zeratul":
    
        break;
    case "Grisetête";
        break;
    case "Valyria";
        break;
    case "KaelThas";
        break;
 
    default:
        $message = "Erreur 404 : Page inconnue&nbsp;!";
        include "View/Template/erreur.html";
        break;
}


