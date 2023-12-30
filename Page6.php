<?php
if(isset($_POST["number"])){
    $nombre = (int) $_POST["number"];
    $countdiv = 1;
}
echo 'Exercice 6';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 6</title>
</head>
<body>
<form method="POST">
    <label for="">Entrer un nombre :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
    <?php
    if(isset($_POST["number"])){
        if ($countdiv>1){
            echo "<p> 2 est diviseur  </p>";
        }else{
            echo "<p> 4 n'est pas diviseur </p>";

        }
    }
    ?>
       <a href="Page7.php">Exercice 7:</a>
</body>
</html>