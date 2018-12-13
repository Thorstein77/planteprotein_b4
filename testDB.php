<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Tillader brug af Font Awesome ikoner -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <!-- Googlefonts -->

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("db/db.php");

$product = mysqli_query($db, "SELECT * FROM products WHERE pId = '2'");
$pData = mysqli_fetch_assoc($product);
$pId = $pData["pId"];
$images = mysqli_query($db, "SELECT * FROM images WHERE iPId = '$pId' ORDER BY iId");
$iData = mysqli_fetch_assoc($images);
$taste = mysqli_query($db, "SELECT * FROM taste WHERE tPId = '$pId' ORDER BY tId");
$weight = mysqli_query($db, "SELECT * FROM weight WHERE wPId = '$pId' ORDER BY wId");



echo $pData["pBrand"]." ".$pData["pName"];
?>

<img src="<?php echo $iData['iLink'] ?>">

<?php
while($tData = mysqli_fetch_assoc($taste)){
    $var = $tData["tName"];

    echo $var."<br>";
}

while($wData = mysqli_fetch_assoc($weight)){
    $var = $wData["wAmount"];
    $price = $wData["wPrice"];
    echo $var." ".$price.",-<br>";
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>

</body>
</html>