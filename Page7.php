<?php

// Fonction pour calculer la somme des diviseurs propres d'un nombre
function sommeDiviseursPropres($nombre) {
    $somme = 0;

    for ($i = 1; $i <= $nombre / 2; $i++) {
        if ($nombre % $i == 0) {
            $somme += $i;
        }
    }

    return $somme;
}


function estNombreParfait($nombre) {
    return $nombre == sommeDiviseursPropres($nombre);
    $nombre = readline("Entrez un nombre : ");
    $nombre = (int)$nombre;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>page 7</title>
</head>
<body>
<form method="POST">
    <label for="">Entrer un nombre :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
    <?php
    if(isset($_POST["number"])){
         
            echo "<p> est un nombre parfait</p>";
        } else {
            echo "<p> n'est pas un nombre parfait</p>";
        }
    ?>
    <a href="Page8.php">Exercice 8:</a>
</body>
</html>