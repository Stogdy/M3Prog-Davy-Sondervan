<?php
$titel = "Shikanoko met NWA meetup";
$afbeelding = '<img src="/images/shikanoko.png" width="350">';
$auteur = "Stogdy";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <main>
        <h1>
        <?php echo $titel;?></h1>
        <h2><?= $afbeelding;?></h2>
        <h3><?= $auteur;?></h3>
      </main>
</body>
</html>