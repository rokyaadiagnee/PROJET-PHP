<?php

function afficherTableauMultidimensionnel($tableau) {
    echo '<table border="1">';
    
    // Afficher les titres des colonnes
    echo '<tr>';
    foreach (array_keys(current($tableau)) as $titre) {
        echo '<th>' . htmlspecialchars($titre) . '</th>';
    }
    echo '</tr>';
    
    // Afficher les données du tableau
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
}

// Exemple d'utilisation
$tableauMultidimensionnel = array(
    array('Nom' => 'John', 'Age' => 25, 'Ville' => 'Paris'),
    array('Nom' => 'Jane', 'Age' => 30, 'Ville' => 'Londres'),
    array('Nom' => 'Bob', 'Age' => 22, 'Ville' => 'New York')
);

afficherTableauMultidimensionnel($tableauMultidimensionnel);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>page 17</title>
</head>
<body>
    
</body>
</html>