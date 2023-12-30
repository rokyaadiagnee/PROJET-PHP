<?php 
    $personnes = [
        "1" => ["prenom"=>"Ami","ville"=>"Joal","age"=>20],
        "2" => ["prenom"=>"Sara","ville"=>"Mbour","age"=>39],
        "3" => ["prenom"=>"Aissatou","ville"=>"Touba","age"=>50],
        "4" => ["prenom"=>"Bintou","ville"=>"Malikounda","age"=>32]
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
        <td>Ville</td>
        <td>Age</td>
    </tr>
    <?php
    foreach ($personnes as $key=>$person) {?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $person["prenom"]?></td>
            <td><?php echo $person["ville"] ?></td>
            <td><?php echo $person["age"] ?></td>
        </tr>
    <?php } ?>
    <a href="Page10.php">Exercice 10:</a>
   </table>
</body>
</html>