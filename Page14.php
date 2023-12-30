<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier quelle action a été choisie
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Rediriger en fonction du choix
        switch ($action) {
            case 'Vendre':
                header('Location: vendre.php');
                exit();
                break;
            case 'Acheter':
                header('Location: acheter.php');
                exit();
                break;
            case 'Louer':
                header('Location: louer.php');
                exit();
                break;
            default:
                // Gérer d'autres cas si nécessaire
                break;
        }
    }
}

// Redirection par défaut si aucune action n'est spécifiée
header('Location: index.php');
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>

<!-- Formulaire -->
<form method="post" action="traitement.php">
    <input type="submit" name="action" value="Vendre">
    <input type="submit" name="action" value="Acheter">
    <input type="submit" name="action" value="Louer">
</form>

</body>
</html>
