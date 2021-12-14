<?php
use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele\dao\TypeCuisineDAO;
use modele\metier\TypeCuisine;

/**
 * Contrôleur monProfil
 * Page d'affichage des caractéristiques d'un utilisateur
 * 
 * Vue contrôlée : vueMonProfil
 * Données GET : 
 * 
 * @version 07/2021 intégration couche modèle objet
 * @version 08/2021 gestion erreurs
 */


Bdd::connecter();

// Récupération des données GET, POST, et SESSION

// Récupération des données utilisées dans la vue 
// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=profil","label"=>"Consulter mon profil");
$menuBurger[] = Array("url"=>"./?action=updProfil","label"=>"Modifier mon profil");
$menuBurger[] = array("url"=>"./?action=gest_util" ,"label"=>"Gestion des utilisateurs");
$menuBurger[] = array("url"=>"./?action=gest_cuisine" ,"label"=>"Gestion des types de cuisines");
$menuBurger[] = array("url"=>"./?action=ajouterResto","label"=>"Ajouter un restaurant");
$menuBurger[] = array("url"=>"./?action=modifierResto","label"=>"Modifier un restaurant");
$menuBurger[] = array("url"=>"./?action=admin","label"=>"Supprimer un restaurant");


$listeTypeCuisine =  TypeCuisineDAO::getAll();

// Construction de la vue
$titre = "Gestion des cuisines";
if (isLoggedOn()){
    // Si un utilisateur est connecté
    // Données spécifiques à la page vuegest_cuisine
    // $idU = getIdULoggedOn();
    // $mailU = getMailULoggedOn();
    // $type_cuisine = 
    // $util = UtilisateurDAO::getOneById($idU);   
    // $mesRestosAimes = $util->getLesRestosAimes();
    // $mesTypeCuisinePreferes = $util->getLesTypesCuisinePreferes();
    // Construction de la vue
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/vuegest_cuisine.php";
 }
else{
    // Si un aucun utilisateur n'est connecté
    // Construction de la vue
    ajouterMessage("Profil : aucun utilisateur n'est connecté");
    require_once "$racine/vue/entete.html.php";
}
require_once "$racine/vue/pied.html.php";

?>