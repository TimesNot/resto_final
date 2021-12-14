<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele\dao\TypeCuisineDAO;
use modele\dao\AimerDAO;
use modele\dao\PrefererDAO;
use modele\dao\RestoDAO;

Bdd::connecter();

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=profil","label"=>"Consulter mon profil");
$menuBurger[] = Array("url"=>"./?action=updProfil","label"=>"Modifier mon profil");
$menuBurger[] = array("url"=>"./?action=ajouterResto","label"=>"Ajouter un restaurant");
$menuBurger[] = array("url"=>"./?action=modifierResto","label"=>"Modifier un restaurant");
$menuBurger[] = array("url"=>"./?action=admin","label"=>"Supprimer un restaurant");


// Initialisations 
$titre = "Modifier un restaurant";


// Si un utilisateur est connecté
// if (isLoggedOn()) {
//     // récupérer son identité
//     $idR = getIdRLoggedOn();
//     $resto = RestoDAO::getOneById($idR);

//     // Mise à jour de l'objet Utilisateur $util en fonction des saisies
//     // Nouveau nom resto
//     $nomR = "";
//     if (isset($_POST["nomR"])) {
//         $nomR = $_POST["nomR"];
//         if ($nomR != "") {
//             $resto->setPseudoU($pseudoU);
//             RestoDAO::update_nomR($resto);
//         }
//     }

//    $numAdrR = "";
//     if (isset($_POST["numAdrR"])) {
//         $numAdrR = $_POST["numAdrR"];
//         if ($numAdrR != "") {
//             $resto->setPseudoU($pseudoU);
//             RestoDAO::update_numAdrR($resto);
//         }
//     }

//    $voieAdrR = "";
//     if (isset($_POST["voieAdrR"])) {
//         $voieAdrR = $_POST["voieAdrR"];
//         if ($voieAdrR != "") {
//             $resto->setPseudoU($pseudoU);
//             RestoDAO::update_voieAdrR($resto);
//         }
//     }
    
//     $descR = "";
//     if (isset($_POST["descR"])) {
//         $descR = $_POST["descR"];
//         if ($descR != "") {
//             $resto->setPseudoU($pseudoU);
//             RestoDAO::update_descR($resto);
//         }
//     }
//     $horairesR = "";
//     if (isset($_POST["horairesR"])) {
//         $horairesR = $_POST["horairesR"];
//         if ($horairesR != "") {
//             $resto->setPseudoU($pseudoU);
//             RestoDAO::update_horairesR($resto);
//         }
//     }
//     }
//     // Types de cuisine à ajouter à la liste des types de cuisine préférés
    
    

    

// Si on a changé le mot de passe, il faut se reconnecter
    if (!isLoggedOn()) {
        // Construction de la vue
        require_once "$racine/vue/entete.html.php";
        require_once "$racine/vue/vueAuthentification.php";
        require_once "$racine/vue/pied.html.php";
    } else {
        // Sinon, on revient sur le formulaire
        // Recharger les données
        $util = RestoDAO::getOneById($idR);
        // Construction de la vue
        require_once "$racine/vue/entete.html.php";
        require_once "$racine/vue/vueUpdProfil.php";
        require_once "$racine/vue/pied.html.php";
    }
?>


