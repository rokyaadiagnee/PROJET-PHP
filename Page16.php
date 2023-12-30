<?php

function sinus($angle, $unite = 'radian') {
    switch ($unite) {
        case 'degre':
            $angle = deg2rad($angle);
            break;
        case 'grade':
            $angle = ($angle * M_PI) / 200;
            break;
    }
    return sin($angle);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>page 16</title>
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
            echo "<p> Sinus en radians :  </p>";
        }else{
            echo "<p> Sinus en degrés :  </p>";

        }
    }
</body>
</html>
