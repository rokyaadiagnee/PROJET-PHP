<?php 
    if(isset($_POST["number"])){
        $rayon = (int) $_POST["number"];
        $diametre = $rayon*2;
        $perimetre = 2 * M_PI * $rayon;
        $surface = M_PI * pow($rayon, 2);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
   <form method="POST">
    <label for="">Entrer le rayon :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
   <?php
        if (isset($diametre)){
        echo "<p>Le diamètre du cercle est : <?php  $diametre ?></p>";

        echo "<p>Périmètre du cercle est : <?php $perimetre  ?></p>";

        echo "<p>Surface du cercle est : <?php $surface ?></p>";

        echo "<h2>Résultats :</h2>";

        }
    ?>
    <a href="Page6.php">Exercice 6:</a>
</body>
</html>