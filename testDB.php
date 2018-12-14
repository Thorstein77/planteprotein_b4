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


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php

if(isset($_GET['pagenum']) && $_GET['pagenum'] != ""){
    $pagenum = mysqli_real_escape_string($db, $_GET['pagenum']);
}else{
    $pagenum = 1;
}
// hvor mange produkter vi vil se per side
$totalProductsPerPage = 9;
// beregner hvor mange produkter der skal 'springes over'
$offset = ($pagenum - 1) * $totalProductsPerPage;
$prevPage = ($pagenum -1);
$nextPage = ($pagenum + 1);
$edjacents = "2";

$resultCount = mysqli_query($db, "SELECT COUNT(*) AS 'totalProducts' FROM products");
$totalProducts = mysqli_fetch_array($resultCount);
$totalProducts = $totalProducts['totalProducts'];
$totalNumOfPages = ceil($totalProducts / $totalProductsPerPage);
$secondLast = ($totalNumOfPages - 1);

$result = mysqli_query($db, "SELECT * FROM products LIMIT $offset, $totalProductsPerPage");

while($row = mysqli_fetch_array($result)) {
    $pId = $row["pId"];
    $img = mysqli_query($db, "SELECT * FROM images WHERE iPId = '$pId'");
    $imgResult = mysqli_fetch_array($img);
    $taste = mysqli_query($db, "SELECT * FROM taste WHERE tPId = '$pId'");
    $price = mysqli_query($db, "SELECT * FROM weight WHERE wPId = '$pId' ORDER BY wPrice ASC");
    $priceResult = mysqli_fetch_array($price);

    // her insættes de ting der skal udskrives, aka produkter
    ?>
        <main  class="products">
            <section class="productsSection">
                <div class="product">

                    <a href="product.php?pid=<?php echo $pId; ?>">
                        <h2>
                            <?php
                            echo $row["pBrand"]."<br>".$row["pName"];
                            ?>
                        </h2>

                        <img src="<?php echo $imgResult['iLink'] ?>" alt="<?php echo $imgResult['iAlt'] ?>">

                        <div class="info">

                            <div class="gradient"></div>

                            <h3>
                                <?php
                                    $i = 1;
                                    $tString = '';
                                    $tArray = array();
                                    while ($tasteCount = mysqli_fetch_assoc($taste)){
                                        $tName = $tasteCount["tName"];
                                        array_push($tArray, $tName);
                                    }

                                    $tCount = count($tArray);

                                    foreach ($tArray as $value){
                                        echo $value;
                                        if($i < $tCount){
                                            echo " | ";
                                        }
                                        $i++;
                                    }
                                ?>
                            </h3>

                            <div class="price">

                                <div class="icons">
                                    <?php
                                    if($row["pGluten"] == 'Yes'){
                                        ?>
                                        <div class="iconImg">
                                            <img src="images/icons/gluten.png">
                                        </div>
                                        <?php
                                    }

                                    if($row["pSoy"] == 'Yes'){
                                        ?>
                                        <div class="iconImg">
                                            <img src="images/icons/soy.png">
                                        </div>
                                        <?php
                                    }

                                    if($row["pLactose"] == 'Yes') {
                                        ?>
                                        <div class="iconImg">
                                            <img src="images/icons/lactose.png">
                                        </div>
                                        <?php
                                    }

                                    if($row["pOrganic"] == 'Yes') {
                                        ?>

                                        <div class="iconImg">
                                            <img src="images/icons/organic.png">
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>

                                <p>
                                    <?php
                                        echo $priceResult["wPrice"];
                                    ?>
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="flex">
                        <button>Læg i kurv</button>
                    </div>
                </div>
            </section>
        </main>

    <?php
}
?>

<ul class="pagination">
    <?php if($pagenum > 1){
        echo "<li><a href='?pagenum=1'>First</a></li>";
    } ?>

    <li <?php if($pagenum <= 1){ echo "class='disabled'"; } ?>>
        <a <?php if($pagenum > 1){
            echo "href='?pagenum=$prevPage'";
        } ?>>Prev</a>
    </li>

    <li <?php if($pagenum >= $totalNumOfPages){
        echo "class='disabled'";
    } ?>>
        <a <?php if($pagenum < $totalNumOfPages) {
            echo "href='?pagenum=$nextPage'";
        } ?>>Next</a>
    </li>

    <?php if($pagenum < $totalNumOfPages){
        echo "<li><a href='?pagenum=$totalNumOfPages'>Last</a></li>";
    } ?>
</ul>


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