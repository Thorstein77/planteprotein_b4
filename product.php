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
?>

<main class="product">

    <h1 class="productName">Vega Protein & Greens proteinpulver</h1>


    <div class="productPic">
        <img src="images/productImages/vega-protein-greens-proteinpulver.png">
    </div>


    <div class="productInfo">

        <p>375,-</p>

        <div class="productInfoFormularer">

            <div class="productInfoFormularerSmag">

                <h3>Smag</h3>

                <ul>

                    <li>
                        <input type="checkbox">
                        Bær
                    </li>

                    <li>
                        <input type="checkbox">
                        Vanilje
                    </li>

                    <li>
                        <input type="checkbox">
                        Chokolade
                    </li>

                    <li>
                        <input type="checkbox">
                        Kokos mandel
                    </li>

                </ul>

            </div>

            <br><br>

            <div class="productInfoFormularerGram">

                <h3>Gram</h3>

                <ul>

                    <li>
                        <input type="checkbox">
                        760 gram
                    </li>

                    <li>
                        <input type="checkbox">
                        518 gram
                    </li>

                </ul>

            </div>

        </div>

        <button>Læg i kurv</button>

    </div>


    <div class="productDescription">

        <div class="productDescriptionDescription">

            <p><b>Beskrivelse:</b></p>
            <p>Tilføj let mere plantebaseret ernæring til din dag med
            Vega® Protein & Greens.
            <br>
            Vega Protein & Greens er fremstillet med ægte
            plantebaserede fødevareingredienser og er mere end
            blot en proteinshake.

            <br><br>

            20 gram plantebaseret protein
            <br>
            Grøntsager
            <br>
            110-120 kalorier
            <br>
            0-1 gram sukker</p>

        </div>

        <div class="productDescriptionIkoner">
            <img src="images/icons/gluten.png">
            <img src="images/icons/soy.png">
            <img src="images/icons/lactose.png">
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
    });
</script>
</body>
</html>
