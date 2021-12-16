<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele\dao\RestoDAO;
/**
 * Contrôleur updProfil
 * Page d'affichage des caractéristiques d'un utilisateur
 * 
 * Vues contrôlées : vueUpdProfil, vueAuthentification.php
 * 
 * @version 07/2021 intégration couche modèle objet
 * @version 08/2021 gestion erreurs
 */
Bdd::connecter();

// creation du menu burger
$menuBurger = array();
$menuBurger[] = array("url"=>"./?action=profil","label"=>"Consulter mon profil");
$menuBurger[] = array("url"=>"./?action=updProfil","label"=>"Modifier mon profil");
$menuBurger[] = array("url"=>"./?action=gestUtil" ,"label"=>"Gestion des utilisateurs");
$menuBurger[] = array("url"=>"./?action=gestCuisine" ,"label"=>"Gestion des types de cuisines");
$menuBurger[] = array("url"=>"./?action=liste","label"=>"Gestion de restaurant");



// Initialisations 
$titre = "Modifier mon resto";
$idR = $_GET['idR'];
// Si un utilisateur est connecté
if (isLoggedOn()) {
    // récupérer son identité
    $idU = getIdULoggedOn();
    $resto = RestoDAO::getOneById($idR);

    // Mise à jour de l'objet Utilisateur $util en fonction des saisies
    // Nouveau nom de resto
    $nomR = "";
    if (isset($_POST["nomR"])) {
        $nomR = $_POST["nomR"];
        if ($nomR != "") {
            $resto->setNomR($nomR);
            RestoDAO::update($resto);
        }
    }

    // Nouveau numéro d'adresse de resto
    $numAdr = "";
    if (isset($_POST["numAdr"])) {
        $numAdr = $_POST["numAdr"];
        if ($numAdr != "") {
            $resto->setnumAdr($numAdr);
            RestoDAO::update($resto);
        }
    }

    // Nouvelle voie d'adresse de resto
    $voieAdr = "";
    if (isset($_POST["voieAdr"])) {
        $voieAdr = $_POST["voieAdr"];
        if ($voieAdr != "") {
            $resto->setVoieAdr($voieAdr);
            RestoDAO::update($resto);
        }
    }

    // Nouveau code postal d'adresse de resto
    $cpR = "";
    if (isset($_POST["cpR"])) {
        $cpR = $_POST["cpR"];
        if ($cpR != "") {
            $resto->setCpR($cpR);
            RestoDAO::update($resto);
        }
    }
    // Nouvelle ville pour l'adresse du resto
    $villeR = "";
    if (isset($_POST["villeR"])) {
        $villeR = $_POST["villeR"];
        if ($villeR != "") {
            $resto->setCpR($cpR);
            RestoDAO::update($resto);
        }
    }

    // Nouvelle latitude pour l'adresse du resto
    $latitudeDegR = "";
    if (isset($_POST["latitudeDegR"])) {
        $latitudeDegR = $_POST["latitudeDegR"];
        if ($latitudeDegR != "") {
            $resto->setLatitudeDegR($latitudeDegR);
            RestoDAO::update($resto);
        }
    }

    // Nouvelle longitude pour l'adresse du resto
    $longitudeDegR = "";
    if (isset($_POST["longitudeDegR"])) {
        $longitudeDegR = $_POST["longitudeDegR"];
        if ($longitudeDegR != "") {
            $resto->setLongitudeDegR($longitudeDegR);
            RestoDAO::update($resto);
        }
    }

    $descR = "";
    if (isset($_POST["descR"])) {
        $descR = $_POST["descR"];
        if ($descR != "") {
            $resto->setDescR($descR);
            RestoDAO::update($resto);
        }
    }

    $horairesR = "";
    if (isset($_POST["horairesR"])) {
        $horairesR = $_POST["horairesR"];
        if ($horairesR != "") {
            $resto->setHorairesR($horairesR);
            RestoDAO::update($resto);
        }
    }

// Si on a changé le mot de passe, il faut se reconnecter
    if (!isLoggedOn()) {
        // Construction de la vue
    } else {
        // Sinon, on revient sur le formulaire
        // Recharger les données
        $resto = RestoDAO::getOneById($idR);

        // Construction de la vue
        require_once "$racine/vue/entete.html.php";
        require_once "$racine/vue/vueModifierRestaurant.php";
        require_once "$racine/vue/pied.html.php";
    }
} else {
    // Si aucun utilisateur n'est connecté
    // Construction de la vue vide
    ajouterMessage("Update resto : aucun utilisateur n'est connecté");
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/pied.html.php";
}
?>