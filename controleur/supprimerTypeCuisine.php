<?php

use modele\dao\Bdd;
use modele\dao\TypeCuisineDAO;

/**
 * Contrôleur supprimerCritique
 * Suppression de la critique portée par l'utilisateur courant sur un restaurant
 * 
 * Vue contrôlée : aucune
 * Données GET : 
 *      - $idR identifiant du restaurant concerné
 * 
 * @version 07/2021 intégration couche modèle objet
 * @version 08/2021 gestion erreurs
 */
Bdd::connecter();


// Récupération des données GET, POST, et SESSION
if (!isset($_GET["idTC"])) {
    // Pb : pas d'id de restaurant
    ajouterMessage("Supprimer Type Cuisine, il faut fournir un ID de type cuisine");
    $titre = "erreur";
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/pied.html.php";
} else {
    $idTC = intval($_GET["idTC"]);

// Un utilisateur doit être connecté
    $idU = getIdULoggedOn();
    if ($idU != 0) {
        TypeCuisineDAO::delete($idTC);
    }

// redirection vers la page d'origine
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>