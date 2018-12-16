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
?>

<main class="products">

    <h1>Produkter</h1>

    <p class="productText">
        Hos Plante-protein.dk er alle produkter 100% veganske. Du kan
        være helt rolig mens du kigger på vores udvalg. Derudover
        er alle produkter markeret med et ikon der viser om de er
        glutenfri, laktosefri eller økologiske.
    </p>

    <aside>

        <div class="search">
            <input placeholder="Søg i produkter">

            <button>
                <i class="fas fa-search"></i>
            </button>
        </div>

        <button class="productsFilter">Filtrer</button>

        <div class="productsSearch">
            <form class="grid" method="post" action="testDB.php">
                <div id="gridItem1">
                    <h3>Type</h3>

                    <ul>
                        <li>
                            <input type="checkbox" value="proteinpulver" name="type[]">
                            Proteinpulver
                        </li>
                        <li>
                            <input type="checkbox" value="proteinbar" name="type[]">
                            Proteinbar
                        </li>
                    </ul>
                </div>

                <div id="gridItem2">
                    <h3>Smag</h3>

                    <ul>
                        <li>
                            <input type="checkbox" value="vanilla" name="taste[]">
                            Vanilje
                        </li>
                        <li>
                            <input type="checkbox" value="chocolate" name="taste[]">
                            Chokolade
                        </li>
                        <li>
                            <input type="checkbox" value="neutral" name="taste[]">
                            Neutral
                        </li>
                        <li>
                            <input type="checkbox" value="berry" name="taste[]">
                            Bær
                        </li>
                        <li>
                            <input type="checkbox" value="coconut" name="taste[]">
                            Kokos
                        </li>
                    </ul>
                </div>

                <div id="gridItem3">
                    <h3>Mærke</h3>

                    <ul>
                        <li>
                            <input type="checkbox" value="Multipower" name="brand[]">
                            Multipower
                        </li>
                        <li>
                            <input type="checkbox" value="The Protein Works" name="brand[]">
                            The Protein Works
                        </li>
                        <li>
                            <input type="checkbox" value="Scitech Nutrition" name="brand[]">
                            Scitech Nutrition
                        </li>
                        <li>
                            <input type="checkbox" value="GymQueen" name="brand[]">
                            GymQueen
                        </li>
                        <li>
                            <input type="checkbox" value="Plantforce" name="brand[]">
                            Plantforce
                        </li>
                    </ul>
                </div>

                <div id="gridItem4">
                    <h3 class="webHide">&#8205;</h3>

                    <ul>
                        <li>
                            <input type="checkbox" value="Rawfusion" name="brand[]">
                            Rawfusion
                        </li>
                        <li>
                            <input type="checkbox" value="SunWarrior" name="brand[]">
                            SunWarrior
                        </li>
                        <li>
                            <input type="checkbox" value="HEJ" name="brand[]">
                            Hej Neutral
                        </li>
                        <li>
                            <input type="checkbox" value="Vega" name="brand[]">
                            Vega
                        </li>

                    </ul>
                </div>

                <div id="gridItem5">
                    <button type="submit" name="submit">
                        Filtrer
                    </button>
                </div>
            </form>
        </div>
    </aside>

    <?php

    if(isset($_GET['pagenum']) && $_GET['pagenum'] != ""){
        $pagenum = mysqli_real_escape_string($db, $_GET['pagenum']);
    }else{
        $pagenum = 1;
    }
    // hvor mange produkter vi vil se per side
    $totalProductsPerPage = 3;
    // beregner hvor mange produkter der skal 'springes over'
    $offset = ($pagenum - 1) * $totalProductsPerPage;
    $prevPage = ($pagenum -1);
    $nextPage = ($pagenum + 1);

    if(isset($_POST["submit"])){
        $filter = '';
        if(isset($_POST['brand'])){
            $brand = $_POST['brand'];
            $bCount = count($brand);
            $i = 1;
            $filter .= "WHERE pBrand = ";

            foreach($brand as $value){
                $filter .= "'".$value."'";
                if($i < $bCount){
                    $filter .= " OR ";
                }
                $i++;
            }
        }
    }

    ?>
</main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var $animateInfo = $('.info');
    var $window = $(window);

    $window.on('scroll resize', checkIfOnScreen);
    $window.trigger('scroll');

    function checkIfOnScreen(){
        var windowHeight = $window.height();
        var windowTopPosition = $window.scrollTop();
        var windowBottomPosition = (windowTopPosition + windowHeight);

        $.each($animateInfo, function () {

            var $object = $(this);
            var objectHeight = $object.outerHeight();
            var objectTopPosition = $object.offset().top;
            var objectBottomPosition = (objectTopPosition + objectHeight);

            // check if object is in view
            if((objectBottomPosition >= windowTopPosition) &&
                (objectTopPosition <= windowBottomPosition)){
                $object.addClass('inView');
            }else{
                $object.removeClass('inView');
            }
        });
    }

</script>

</body>
</html>