<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele_dao\RestoDAO;
use modele_metier\Utilisateur;
/**
 * ----------
 * vueGestUtil
 * ----------
 * 
 * * @version 07/2021 par DD : intégration couche modèle objet
 
 * Variables transmises par le contrôleur accueil contenant les données à afficher :
 * ---------------------------------------------------------------------------------  */
/** @var array $listeRestos : tableau d'objets métier de type Resto : les 4 restaurants les mieux notés en moyenne */
/**
 * Variables supplémentaires :  
   ------------------------- */
/** @var Resto  $unResto */
/** @var Photo  $laPhotoPrincipale */
/** @var TypeCuisine  $unTC */
?>
<div id="accroche">Gestion des utilisateurs</div>



