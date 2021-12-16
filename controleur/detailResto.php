<?php

use modele\dao\Bdd;
use modele\dao\RestoDAO;
use modele\dao\CritiqueDAO;
use modele\dao\AimerDAO;

/**
 * Contrôleur detailResto
 * Page d'affichage des caractéristiques d'un restaurant
 * 
 * Vue contrôlée : vueDetailResto
 * Données GET : $idR identifiant du restaurant à afficher
 * 
 * @version 07/2021 intégration couche modèle objet
 * @version 08/2021 gestion erreurs
 */
Bdd::connecter();


// creation du menu burger
$menuBurger = array();
$menuBurger[] = array("url" => "#top", "label" => "Le restaurant");
$menuBurger[] = array("url" => "#adresse", "label" => "Adresse");
$menuBurger[] = array("url" => "#photos", "label" => "Photos");
$menuBurger[] = array("url" => "#horaires", "label" => "Horaires");
$menuBurger[] = array("url" => "#crit", "label" => "Critiques");

// Récupération des données GET, POST, et SESSION
if (!isset($_GET["idR"])) {
    // Pb : pas d'id de restaurant
    ajouterMessage("Détail resto : il faut fournir un identifiant de restaurant");
    $titre = "erreur";
    require_once "$racine/vue/entete.html.php";
    require_once "$racine/vue/pied.html.php";
} else {
    $idR = intval($_GET["idR"]);

// Récupération des données utilisées dans la vue 
    $unResto = RestoDAO::getOneById($idR);
    if (is_null($unResto)) {
        // Pb : pas de restaurant pour cet id
        ajouterMessage("Détail resto : restaurant non trouvé");
        $titre = "erreur";
        require_once "$racine/vue/entete.html.php";
        require_once "$racine/vue/pied.html.php";
    } else {
        $lesTypesCuisine = $unResto->getLesTypesCuisineProposes();
        $lesPhotos = $unResto->getLesPhotos();
        $critiques = $unResto->getLesCritiques();
        $noteMoy = round(CritiqueDAO::getNoteMoyenneByIdR($idR), 0);
        $noteMoyen= round(CritiqueDAO::getNoteMoyenneByIdR($idR),1);
        $idU = getIdULoggedOn();
        $mailU = getMailULoggedOn();
        $aimer = AimerDAO::estAimeById($idU, $idR);
        $maCritique = CritiqueDAO::getOneById($idR, $idU);
        $monCommentaire = "";
        if ($maCritique) {
            $monCommentaire = $maCritique->getCommentaire();
        }
        $titre = $unResto->getNomR();
        
// Construction de la vue
        require_once "$racine/vue/entete.html.php";
        require_once "$racine/vue/vueDetailResto.php";
        require_once "$racine/vue/pied.html.php";
    }
}
?>