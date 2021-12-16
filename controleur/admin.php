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
$menuBurger[] = array("url"=>"./?action=ajouterResto","label"=>"Ajouter un restaurant");
$menuBurger[] = array("url"=>"./?action=liste","label"=>"Modifier un restaurant");
$menuBurger[] = array("url"=>"./?action=admin","label"=>"Supprimer un restaurant");


// Initialisations 
$titre = "Administration";

$listeRestos =  RestoDAO::getAll();
require_once "$racine/vue/entete.html.php";
require_once "$racine/vue/vueSupprimerRestaurant.php";
require_once "$racine/vue/vueListeRestos.php";
require_once "$racine/vue/pied.html.php";
