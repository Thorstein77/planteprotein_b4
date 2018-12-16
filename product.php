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
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!-- Titel, description og keywords skal være forskellige på alle undersider -->

    <meta property="og:title" content="titel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.domain.dk">
    <meta property="og:image" content="https://www.domain.dk/img.jpg">
    <meta property="og:description" content="Beskrivelse">
    <meta property="og:locale" content="da_DK">


    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php");
require ("db/db.php");

$pId = mysqli_real_escape_string($db, $_GET["pid"]);
$result = mysqli_query($db, "SELECT * FROM products WHERE pId = '$pId'");
$pData = mysqli_fetch_assoc($result);

$result = mysqli_query($db, "SELECT * FROM images WHERE iPId = '$pId'");
$img = mysqli_fetch_assoc($result);

$tResult = mysqli_query($db, "SELECT * FROM taste WHERE tPId = '$pId'");

$wResult = mysqli_query($db, "SELECT * FROM weight WHERE wPId = '$pId'");

$pResult = mysqli_query($db, "SELECT wPrice FROM weight WHERE wPId = '$pId'");
$priceData = mysqli_fetch_assoc($pResult);

?>

<main class="product">

    <h1 class="productName">
        <?php
        echo $pData['pBrand']." ".$pData['pName'];
        ?>
    </h1>


    <div class="productPic">
        <img src="<?php echo $img['iLink']; ?>">
    </div>


    <div class="productInfo">

        <p id="productPagePrice">
            <?php
            echo $priceData['wPrice'];
            ?>
        </p>

        <div class="productInfoFormularer">

            <div class="productInfoFormularerSmag">

                <h3>Smag</h3>

                <ul>
                    <?php
                    $tI = 1;
                    while ($tData = mysqli_fetch_assoc($tResult)){
                        ?>
                        <li>
                            <input type="radio" name="taste"
                                    <?php
                                    if($tI == 1){
                                        echo "checked='checked'";
                                    }
                                    ?>
                                   value="<?php echo $tData['tName'] ?>">
                            <?php echo $tData['tName'] ?>
                        </li>
                        <?php
                        $tI++;
                    }
                    ?>
                </ul>

            </div>

            <br><br>

            <div class="productInfoFormularerGram">

                <h3>Gram</h3>

                <ul>
                    <?php
                    $wI = 1;
                    while ($wData = mysqli_fetch_assoc($wResult)){
                        ?>
                        <li>
                            <input type="radio" name="weight"
                                   <?php
                                   if($wI == 1){
                                       echo "checked='checked'";
                                   }
                                   ?>
                                   value="<?php echo $wData['wPrice'] ?>">
                            <?php echo $wData['wAmount'] ?>
                        </li>
                        <?php
                        $wI++;
                    }
                    ?>
                </ul>

            </div>

        </div>

        <button>Læg i kurv</button>

    </div>


    <div class="productDescription">

        <div class="productDescriptionDescription">

            <p><b>Beskrivelse:</b></p>
            <p>
                <?php
                echo $pData['pDesc'];
                ?>
            </p>
            <br><br>
            <img src="<?php echo $pData['pContent'] ?>">

        </div>

        <div class="productDescriptionIkoner">
            <?php
            if($pData["pGluten"] == 'Yes'){
                ?>
                <div class="iconImg">
                    <img src="images/icons/gluten.png">
                </div>
                <?php
            }

            if($pData["pSoy"] == 'Yes'){
                ?>
                <div class="iconImg">
                    <img src="images/icons/soy.png">
                </div>
                <?php
            }

            if($pData["pLactose"] == 'Yes') {
                ?>
                <div class="iconImg">
                    <img src="images/icons/lactose.png">
                </div>
                <?php
            }

            if($pData["pOrganic"] == 'Yes') {
                ?>

                <div class="iconImg">
                    <img src="images/icons/organic.png">
                </div>
                <?php
            }
            ?>
        </div>

    </div>


    <div class="productShare">

        <p>Del</p>

        <div class="productShareIkoner">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter-square"></i>
        <i class="fab fa-pinterest-square"></i>
        <i class="fab fa-google-plus-square"></i>
        </div>

    </div>

</main>

<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        // Din kode her
        var price = null;
        $("input[name='weight']").click(function() {
            price = this.value;
            $("#productPagePrice").html(price);
        });
    });
</script>
</body>
</html>
