<?php

use modele\dao\Bdd;
use modele\dao\CritiqueDAO;
use modele\dao\RestoDAO;

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


if (!isset($_GET["idR"])) {
    // Pb : pas d'id de restaurant
    ajouterMessage("Supprimer un restaurant : il faut fournir un identifiant de restaurant");
    $titre = "erreur";
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/pied.html.php";
} else {
    $idR = intval($_GET["idR"]);

// Un utilisateur doit être connecté
    $idU = getIdULoggedOn();
    if ($idU != 0) {
        RestoDAO::delete($idR);
    }

// redirection vers la page d'origine
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>