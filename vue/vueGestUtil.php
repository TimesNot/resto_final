<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use model\dao\RestoDAO;
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

?>
<div id="accroche">Gestion des utilisateurs</div>
<div class="container_list">
    <table>
<?php 
    for ($i = 0; $i < count($listeUtilisateurs); $i++) { 
        $unUtilisateur = $listeUtilisateurs[$i];
        ?>
    <tr><td><input type="checkbox" name="idUtilisateur" id="idUtilisateur<?= $i ?>" value="<?= $unUtilisateur->getIdU() ?>" >
    <label for="Pseudo<?= $i ?>"><?= $unUtilisateur->getPseudoU() ?></label></td>
    <td><button class="button_delete"><a class="supp" href='./?action=supprimerUtilisateur&idU=<?= $unTypeCuisine->getIdU(); ?>'>Supprimer</a></button></td>
</tr>
    <?php 
    }
     ?>
     </table></div>



