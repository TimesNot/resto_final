<?php

use modele\dao\Bdd;
use modele\dao\utilisateurDAO;

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


if (!isset($_GET["idU"])) {
    // Pb : pas d'id de restaurant
    ajouterMessage("Supprimer un utilisateur : il faut fournir un identifiant d'utilisateur");
    $titre = "erreur";
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/pied.html.php";
} else {
    $idU = intval($_GET["idU"]);

// Un utilisateur doit être connecté
    if ($idU != 0) {
        UtilisateurDAO::delete($idU);
    }

// redirection vers la page d'origine
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>