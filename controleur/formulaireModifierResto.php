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
$resto = RestoDAO::getOneById($idR);
// Si un utilisateur est connecté
if (isLoggedOn()) {
    // récupérer son identité
    
    // variables
    // Mise à jour de l'objet Utilisateur $util en fonction des saisies
    // Nouveau nom de resto
    

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