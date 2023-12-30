<?php
if(isset($_POST["number"])){
    $nombre = (int) $_POST["number"];
    $countdiv = 1;
}
echo 'Exercice 2';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>
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
            echo "<p>$nombre est multiple de 3 et de 5</p>";
        }else{
            echo "<p>$nombre n'est pas multiple de 3 et de 5 </p>";

        }
    }
    ?>
       <a href="Page3.php">Exercice 3:</a>
</body>
</html>