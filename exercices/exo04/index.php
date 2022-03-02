<?php ob_start(); //  ne pas modifier
$titre = "Exo 04 - Variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nb = rand(1, 20);

echo "<h1>Le nombre est : $nb</h1>";

if($nb >= 1 && $nb <= 5){
    echo "Il est compris entre 1 et 5";
} elseif ($nb >= 6 && $nb <= 10){
    echo "Il est compris entre 6 et 10";
} elseif($nb >= 11 && $nb <= 15){
    echo "Il est compris entre 11 et 15";
} else {
    echo "Il est compris entre 16 et 20";
}

// Solution non optimisée
if($nb >= 1 && $nb <= 5){
    echo "Il est compris entre 1 et 5";
}

if ($nb >= 6 && $nb <= 10){
    echo "Il est compris entre 6 et 10";
}

if($nb >= 11 && $nb <= 15){
    echo "Il est compris entre 11 et 15";
}

if($nb >= 16 && $nb <= 20) {
    echo "Il est compris entre 16 et 20";
}



?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>