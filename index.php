<?php
    include_once "Adatbazis.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Kovacs Istvan Gabor</title>
</head>
<body>
    <h1>AB Dolgozat</h1>
    <?php
    $adatbazis = new Adatbazis();
    $matrix = $adatbazis -> adatleker("orszagAzon", "nev", "orszag");
    //$adatbazis -> beszur(3,"India");
    $adatbazis -> torles("orszag","nev","India");
    $adatbazis -> megjelenit($matrix);
    ?>
</body>
</html>