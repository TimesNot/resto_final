<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele\dao\RestoDAO;
use modele\metier\Utilisateur;
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
<?= $idR ?>
<div id="accroche">Modifier un restaurant</div>

Nom du restaurant : <?= $resto->getNomR() ?> <br />

<form action="./?action=updResto"<?= $idR ?> method="POST">
<input type="hidden" name="idR" value="<?=$idR ?>" /> 
<?php echo '<input type="text" name="nomR" value="' . $resto->getNomR() . '"/>'?><br>
    

    Numéro de l'adresse du restaurant  : <br />
    <?php echo '<input type="text" name="NumAdrR" value="' . $resto->getNumAdr() . '"/>'?><br>

    Adresse du restaurant : <br />
    <?php echo '<input type="text" name="voieAdrR" value="' . $resto->getVoieAdr() . '"/>'?><br>

    Code Postal : <br />
    <?php echo '<input type="text" name="cpR" value="' . $resto->getCpR() . '"/>'?><br>

    Ville : <br />
    <?php echo '<input type="text" name="villeR" value="' . $resto->getVilleR() . '"/>'?><br>
<br />

    Latitude : <br>
    <?php echo '<input type="text" name="latitudeDegR" value="' . $resto->getLatitudeDegR() . '"/>'?><br>

    Longitude : <br>
    <?php echo '<input type="text" name="longitude" value="' . $resto->getLongitudeDegR() . '"/>'?><br>


    Description : <br>
    <?php echo '<input type="text" name="descR" value="' . $resto->getDescR() . '"/>'?> <br>

    Horaires : <br>
    <?php echo ' <textarea name="horairesR" rows="30" cols="50" value="test">
            '.$resto->getHorairesR().'
        </textarea>'?> <br>
    <input type="submit" value="Enregistrer" /> <br>  
</form>



