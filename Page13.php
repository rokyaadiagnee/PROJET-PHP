<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA et TTC</title>
</head>
<body>

<?php
// Définir des valeurs par défaut
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider les données saisies
    if (!empty($prixHT) && is_numeric($prixHT) && !empty($tauxTVA) && is_numeric($tauxTVA)) {
        // Calculer la TVA et le TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    } else {
        // Afficher un message d'erreur si les données sont incorrectes
        echo '<p style="color: red;">Veuillez saisir des valeurs valides.</p>';
    }
}
?>

<!-- Formulaire -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="prixHT">Prix HT :</label>
    <input type="text" name="prixHT" id="prixHT" value="<?php echo $prixHT; ?>" required>
    
    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" name="tauxTVA" id="tauxTVA" value="<?php echo $tauxTVA; ?>" required>
    
    <input type="submit" value="Calculer">
</form>

<!-- Résultats -->
<?php
// Afficher les résultats si les calculs ont été effectués avec succès
if (isset($montantTVA) && isset($prixTTC)) {
    echo '<h2>Résultats :</h2>';
    echo '<p>Montant de la TVA : ' . number_format($montantTVA, 2) . ' fc</p>';
    echo '<p>Prix TTC : ' . number_format($prixTTC, 2) . ' fc</p>';
}
?>
<a href="Page14.php">Exercice 14:</a>
</body>
</html>
