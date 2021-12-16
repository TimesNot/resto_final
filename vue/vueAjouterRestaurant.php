<?php
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
<div id="accroche">Ajouter un restaurant</div>

Nom du restaurant : <br />
<form action="./?action=ajouterResto" method="POST">
    <input type="text" name="nomR" placeholder="Mettre le nom du restaurant" required /><br />

    Numéro de l'adresse du restaurant  :  <br />
    <input type="text" name="NumAdrR" placeholder="Mettre le numéro de l'adresse du restaurant " required /><br />

    Adresse du restaurant : <br />
    <input type="text" name="voieAdrR" placeholder="Mettre l'adresse du restaurant " required /><br />

    Code Postal :  <br />
    <input type="text" name="cpR" placeholder="Mettre le code postal du restaurant " required /><br />

    Ville : <br />
    <input type="text" name="villeR" placeholder="Mettre  la ville du restaurant " required /><br />
    

    Latitude : <br />
    <input type="text" name="latitudeDegR" placeholder="Latitude " required /><br />
    

    Longitude : <br />
    <input type="text" name="longitude" placeholder=" Longitude " required /><br />

    Description : <br />
    <input type="text" name="descR" placeholder="Entrez une description " required /><br /> 

    Horaire : <br />
    <input type="text" name="horairesR" placeholder="Entrez les horaires " required /><br />
    
    <input type="submit" value="Enregistrer" /> <br>



<?php
?>

