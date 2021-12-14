<?php

use modele\dao\Bdd;
use modele\dao\UtilisateurDAO;
use modele_dao_TypeCuisine;
/**
 * ----------
 * vueAccueil
 * ----------
 * 
 * * @version 07/2021 par NB : intégration couche modèle objet
 
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
<div id="accroche">Gestion des types de cuisines</div>
<div class="container_list">
    <table>
<?php 
    for ($i = 0; $i < count($listeTypeCuisine); $i++) { 
        $unTypeCuisine = $listeTypeCuisine[$i];
        ?>
    <tr><td><input type="checkbox" name="id_type_cuisine[]" id="type_cuisine<?= $i ?>" value="<?= $unTypeCuisine->getIdTC() ?>" >
    <label class="name_cuisine" for="libelle_cuisine<?= $i ?>"><?= $unTypeCuisine->getLibelleTC() ?></label></td>
    <td><button class="button_delete"><a class="supp" href='./?action=supprimerTypeCuisine&idTC=<?= $unTypeCuisine->getIdTC(); ?>'>Supprimer</a></button></td>
</tr>
    <?php 
    }
     ?>
     </table></div>