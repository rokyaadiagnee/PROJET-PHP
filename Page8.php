<?php 
    $personnes = [
        "N°1" => ["prenom"=>"faty","nom"=>"Diawara","ville"=>"Mali","age"=>28],
        "N°2" => ["prenom"=>"Amina","nom"=>"Sall","ville"=>"Dakar","age"=>34],
        "N°3" => ["prenom"=>"Soraya","nom"=>"Kamara","ville"=>"Gambi","age"=>46],
        "N°4" => ["prenom"=>"Hawa","nom"=>"Sow","ville"=>"Fouta","age"=>23]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 8</title>
</head>
<body>
   <table border=1>
    <tr>
        <td>Clé</td>
        <td>Prénom</td>
        <td>nom</td>
        <td>Ville</td>
        <td>Age</td>
    </tr>
    <?php
    foreach ($personnes as $key=>$person) {?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $person["prenom"]?></td>
            <td><?php echo $person["nom"]?></td>
            <td><?php echo $person["ville"] ?></td>
            <td><?php echo $person["age"] ?></td>
        </tr>
    <?php } ?>
    <a href="Page9.php">Exercice 9:</a>
   </table>
</body>
</html>