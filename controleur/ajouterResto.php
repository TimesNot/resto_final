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
$menuBurger[] = array("url"=>"./?action=profil","label"=>"Consulter mon profil");
$menuBurger[] = array("url"=>"./?action=updProfil","label"=>"Modifier mon profil");
$menuBurger[] = array("url"=>"./?action=gestUtil" ,"label"=>"Gestion des utilisateurs");
$menuBurger[] = array("url"=>"./?action=gestCuisine" ,"label"=>"Gestion des types de cuisines");
$menuBurger[] = array("url"=>"./?action=liste","label"=>"Gestion de restaurant");


// Initialisations 
$titre = "Ajouter restaurant";
$nomR = $_POST["nomR"];
$NumAdrR = $_POST["NumAdrR"];
$voieAdrR = $_POST["voieAdrR"];
$cpR = $_POST["cpR"];
$villeR = $_POST["villeR"];
$latitudeDegR = $_POST["latitudeDegR"];
$longitude = $_POST["longitude"];
$descR = $_POST["descR"];
$horairesR = $_POST["horairesR"];


if(isLoggedOn()) {
    
    // récupérer son identité
    $idU = getIdULoggedOn();
    $util = UtilisateurDAO::getOneById($idU);
    
    if($util != null) {
        if($util->getAdminU()==1) {
            
            RestoDAO::insert($nomR,$NumAdrR,$voieAdrR,$cpR,$villeR,$latitudeDegR,$longitude,$descR,$horairesR);
            
            
        } else{
            ajouterMessage("Ajouter Restaurant : Vous n'êtes pas habilité à ajouter des restaurants");
            require_once "$racine/vue/entete.html.php";
            require_once "$racine/vue/pied.html.php";
        }
    }
}

require_once "$racine/vue/entete.html.php";
require_once "$racine/vue/vueAjouterRestaurant.php";
require_once "$racine/vue/pied.html.php";

