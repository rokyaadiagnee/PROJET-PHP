<?php

function formatPremiereLettreMajuscule(array &$tableau)
{
    foreach ($tableau as &$element) {
        // Utiliser mb_convert_case pour gérer les caractères spéciaux
        $element = mb_convert_case($element, MB_CASE_TITLE, "UTF-8");
    }
}

// Exemple d'utilisation
$monTableau = ["apPlE", "BaNaNa", "Cherry"];
formatPremiereLettreMajuscule($monTableau);

// Affichage du résultat
print_r($monTableau);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 14</title>
</head>
<body>
    
</body>
</html>