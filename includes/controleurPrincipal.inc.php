<?php
/**
 * Fournit le nom du contrôleur principal en fonction de l'action choisie
 * @param string $action libellé de l'action, valeur du paramètre GET "action" de l'URL
 * @return string nom du fichier PHP de la couche contrôleur correspondant à l'action
 */
function controleurPrincipal(string $action) : string {
    $lesActions = array();
    $lesActions["accueil"] = "accueil.php";
    $lesActions["defaut"] = "accueil.php";
    $lesActions["cgu"] = "cgu.php";
    $lesActions["liste"] = "listeRestos.php";
    $lesActions["detail"] = "detailResto.php";
    $lesActions["recherche"] = "rechercheResto.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["updProfil"] = "updProfil.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["aimer"] = "aimer.php";
    $lesActions["noter"] = "noter.php";
    $lesActions["commenter"] = "commenter.php";
    $lesActions["supprimerCritique"] = "supprimerCritique.php";
    $lesActions["ajouterResto"] = "ajouterResto.php";
    $lesActions["formulaireModifierResto"] = "formulaireModifierResto.php";
    $lesActions["supprimerResto"] = "supprimerResto.php";
    $lesActions["gestUtil"] = "gestUtil.php";
    $lesActions["gestCuisine"] = "gestCuisine.php";
    $lesActions["supprimerTypeCuisine"] = "supprimerTypeCuisine.php";
    $lesActions["supprimerUtilisateur"] = "supprimerUtilisateur.php";
    $lesActions["updResto"] = "updResto.php";
    $lesActions["formulaireAjoutResto"] = "formulaireAjoutResto.php";


    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        //throw new Exception("La page demandée n'hésiste pas !");
        ajouterMessage("la page demandé n'existe pas");
        return $lesActions["defaut"];
    }

}

