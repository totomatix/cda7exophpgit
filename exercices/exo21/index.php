<?php ob_start(); //  ne pas modifier
$titre = "Exo 21 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="GET">
    <input type="text" name="nom" placeholder="Votre pseudo">
    <input type="text" name="age" placeholder="votre âge">
    <input type="submit" value="Valider">

</form>
<!-- mettre votre code ici -->
<?php

?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>