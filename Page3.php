<?php
if(isset($_POST["number"])){
    $nombreInitial = (int) $_POST["number"];
    $countdiv = 1;
    $tirage = 0;  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title>
</head>
<body>
<?php
    if(isset($_POST["number"])){
        if ($countdiv>1){
            echo "<p>$nombre est multiple de 3 et de 5</p>";
        }else{
            echo "<p>$nombre n'est pas multiple de 3 et de 5 </p>";
        }
    }
    ?>
       <a href="Page4.php">Exercice 4:</a>
    
</body>
</html>