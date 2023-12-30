<?php
if(isset($_POST["number"])){
    $nombre = (int) $_POST["number"];
    $countdiv = 1;
    $resultat = ($a, $b);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
</head>
<body>
<form method="POST">
    <label for="">Entrer le $nombre :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
    <?php
    if(isset($_POST["number"])){
        if ($countdiv>1){
            echo "<p>$nombre Entrez le premier entier :  </p>";
        }else{
            echo "<p>$nombre Entrez le deuxième entier : </p>";
            echo "<p>Le PPCM de $a et $b est : <?php echo $resultat ?></p>";
            $resultat = ($a, $b);
        }
    }
    ?>
       <a href="Page5.php">Exercice 5:</a>
    
</body>
</html>