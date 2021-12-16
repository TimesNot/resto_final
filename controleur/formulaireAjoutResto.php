<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele\dao\RestoDAO;
use modele\metier\Resto;
/**
 * Contrôleur updResto
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
$titre = "Ajouter mon resto";
// Si un utilisateur est connecté
if (isLoggedOn()) {
    // récupérer son identité
    $idU = getIdULoggedOn();
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/vueAjouterRestaurant.php";
    require_once "$racine/vue/pied.html.php";
}else {
    // Sinon, on revient sur le formulaire
    // Recharger les données

    // Construction de la vue
    require_once "$racine/vue/entete.html.php";
    ajouterMessage("Ajouter un restaurant : Vous n'êtes pas habilité à ajouter un restaurant");
    $titre = "erreur";
    require_once "$racine/vue/pied.html.php";
}
?>