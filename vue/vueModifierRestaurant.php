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
<div id="accroche">Modifier un restaurant</div>
Nom du restaurant : <?= $resto->getNomR() ?> <br />
<form action="./?action=updResto" method="POST">
    <input type="text" name="name_resto" placeholder="Mettre à jour le nom du restaurant" /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Numéro de l'adresse du restaurant  : <?= $resto->getNumAdr() ?> <br />
    <input type="text" name="num_adress_resto" placeholder="Mettre à jour le numéro " /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Adresse du restaurant : <?= $resto->getVoieAdr() ?> <br />
    <input type="text" name="adresse_resto" placeholder="Mettre à jour l'adresse du restaurant " /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Code Postal : <?= $resto->getCpR() ?> <br />
    <input type="text" name="postal_resto" placeholder="Mettre à jour le code postal du restaurant " /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Ville : <?= $resto->getVilleR() ?> <br />
    <input type="text" name="ville_resto" placeholder="Mettre à jour la ville du restaurant " /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Latitude <?= $resto->getLatitudeDegR() ?> <br />
    <input type="text" name="latitude_resto" placeholder="Latitude " /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Longitude : <?= $resto->getLongitudeDegR() ?> <br />
    <input type="text" name="longitude_resto" placeholder="Nouvelle Longitude " /><br />
    <input type="submit" value="Enregistrer" /> <br>

    Description : <?= $resto->getDescR() ?> <br />
    <input type="text" name="description_resto" placeholder="Nouvelle description " /><br />
    <input type="submit" value="Enregistrer" /> <br>  
</form>



