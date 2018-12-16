<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
<title>Sigende titel</title>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php");
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
            <form class="grid" method="get" action="products.php">
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
                            <input type="checkbox" value="multipower" name="brand[]">
                            Multipower
                        </li>
                        <li>
                            <input type="checkbox" value="the protein works" name="brand[]">
                            The Protein Works
                        </li>
                        <li>
                            <input type="checkbox" value="Scitec Nutrition" name="brand[]">
                            Scitec Nutrition
                        </li>
                        <li>
                            <input type="checkbox" value="gymqueen" name="brand[]">
                            GymQueen
                        </li>
                        <li>
                            <input type="checkbox" value="plantforce" name="brand[]">
                            Plantforce
                        </li>
                    </ul>
                </div>

                <div id="gridItem4">
                    <h3 class="webHide">&#8205;</h3>

                    <ul>
                        <li>
                            <input type="checkbox" value="rawfusion" name="brand[]">
                            Rawfusion
                        </li>
                        <li>
                            <input type="checkbox" value="sunwarrior" name="brand[]">
                            SunWarrior
                        </li>
                        <li>
                            <input type="checkbox" value="hej" name="brand[]">
                            Hej Neutral
                        </li>
                        <li>
                            <input type="checkbox" value="vega" name="brand[]">
                            Vega
                        </li>
                        <li>
                            <input type="checkbox" value="all stars" name="brand[]">
                            All Stars
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

    <section class="productsSection mobPagination">
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

        if(isset($_GET["submit"])){
            if(isset($_GET['brand'])){
                $brand = $_GET['brand'];
                $bCount = count($brand);
                $i = 1;
                $bFilter = " pBrand = ";

                foreach($brand as $value){
                    $var = mysqli_real_escape_string($db, $value);
                    $bFilter .= "'".$var."'";
                    if($i < $bCount){
                        $bFilter .= " OR pBrand = ";
                    }
                    $i++;
                }
            }

            if(isset($_GET['type'])){
                $type = $_GET['type'];
                $tCount = count($type);
                $i = 1;
                $tFilter = " pType = ";

                foreach($type as $value){
                    $var = mysqli_real_escape_string($db, $value);
                    $tFilter .= "'".$var."'";
                    if($i < $tCount){
                        $tFilter .= " OR pType = ";
                    }
                    $i++;
                }
            }
        }

        if (isset($bFilter)){

        }else{
            $bFilter = '';
        }

        if (isset($tFilter)){

        }else{
            $tFilter = '';
        }

        $filterFinal = '';
        if($bFilter != '' && $tFilter != ''){
            $filterFinal = "WHERE".$bFilter." AND ".$tFilter;
        }elseif ($bFilter != ''){
            $filterFinal = "WHERE".$bFilter;
        }elseif ($tFilter != ''){
            $filterFinal = "WHERE".$tFilter;
        }

        if(isset($_GET['brand'])){
            $brandPage = '';
            $brand = $_GET['brand'];
            foreach ($brand as $value){
                $var = mysqli_real_escape_string($db, $value);
                $brandPage .= "&brand%5B%5D=".$var;
            }
        }

        if (isset($brandPage)){

        }else{
            $brandPage = '';
        }

        if(isset($_GET['type'])){
            $typePage = '';
            $type = $_GET['type'];
            foreach ($type as $value){
                $var = mysqli_real_escape_string($db, $value);
                $typePage .= "&type%5B%5D=".$var;
            }
        }

        if (isset($typePage)){

        }else{
            $typePage = '';
        }

        $filterPage = $brandPage.$typePage."&submit=";

        $resultCount = mysqli_query($db, "SELECT COUNT(*) AS 'totalProducts' FROM products $filterFinal");
        $totalProducts = mysqli_fetch_array($resultCount);
        $totalProducts = $totalProducts['totalProducts'];
        $totalNumOfPages = ceil($totalProducts / $totalProductsPerPage);
        $secondLast = ($totalNumOfPages - 1);

        $result = mysqli_query($db, "SELECT * FROM products $filterFinal LIMIT $offset, $totalProductsPerPage");

        while($row = mysqli_fetch_array($result)) {
            $pId = $row["pId"];
            $img = mysqli_query($db, "SELECT * FROM images WHERE iPId = '$pId'");
            $imgResult = mysqli_fetch_array($img);
            $taste = mysqli_query($db, "SELECT * FROM taste WHERE tPId = '$pId'");
            $price = mysqli_query($db, "SELECT * FROM weight WHERE wPId = '$pId' ORDER BY wPrice ASC");
            $priceResult = mysqli_fetch_array($price);

            // her insættes de ting der skal udskrives, aka produkter
            ?>

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

            <?php
        }
        ?>

        <ul class="pagination">
            <?php if($pagenum > 1){
                echo "<li><a href='?pagenum=1".$filterPage."'>First</a></li>";
            } ?>

            <li <?php if($pagenum <= 1){ echo "class='disabled'"; } ?>>
                <a <?php if($pagenum > 1){
                    echo "href='?pagenum=".$prevPage.$filterPage."'";
                } ?>>Prev</a>
            </li>

            <li <?php if($pagenum >= $totalNumOfPages){
                echo "class='disabled'";
            } ?>>
                <a <?php if($pagenum < $totalNumOfPages) {
                    echo "href='?pagenum=".$nextPage.$filterPage."'";
                } ?>>Next</a>
            </li>

            <?php if($pagenum < $totalNumOfPages){
                echo "<li><a href='?pagenum=".$totalNumOfPages.$filterPage."'>Last</a></li>";
            } ?>
        </ul>

        <ul class="pagination">
            <?php

            if ($totalNumOfPages <= 10){
                for ($counter = 1; $counter <= $totalNumOfPages; $counter++){
                    if ($counter == $pagenum) {
                        echo "<li class='active'><a>".$counter."</a></li>";
                    }else{
                        echo "<li><a href='?pagenum=".$counter.$filterPage."'>".$counter."</a></li>";
                    }
                }
            }

            ?>
        </ul>
    </section>

    <!-- skift fra mobil til web -->

    <section class="productsSection webPagination">

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

        $resultCount = mysqli_query($db, "SELECT COUNT(*) AS 'totalProducts' FROM products $filterFinal");
        $totalProducts = mysqli_fetch_array($resultCount);
        $totalProducts = $totalProducts['totalProducts'];
        $totalNumOfPages = ceil($totalProducts / $totalProductsPerPage);
        $secondLast = ($totalNumOfPages - 1);

        $result = mysqli_query($db, "SELECT * FROM products $filterFinal LIMIT $offset, $totalProductsPerPage");

        while($row = mysqli_fetch_array($result)) {
            $pId = $row["pId"];
            $img = mysqli_query($db, "SELECT * FROM images WHERE iPId = '$pId'");
            $imgResult = mysqli_fetch_array($img);
            $taste = mysqli_query($db, "SELECT * FROM taste WHERE tPId = '$pId'");
            $price = mysqli_query($db, "SELECT * FROM weight WHERE wPId = '$pId' ORDER BY wPrice ASC");
            $priceResult = mysqli_fetch_array($price);

            // her insættes de ting der skal udskrives, aka produkter
            ?>

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

            <?php
        }
        ?>

        <ul class="pagination" id="paginationGrid">
            <?php if($pagenum > 1){
                echo "<li><a href='?pagenum=1".$filterPage."'>First</a></li>";
            } ?>

            <li <?php if($pagenum <= 1){ echo "class='disabled'"; } ?>>
                <a <?php if($pagenum > 1){
                    echo "href='?pagenum=".$prevPage.$filterPage."'";
                } ?>>Prev</a>
            </li>

            <?php

            if ($totalNumOfPages <= 10){
                for ($counter = 1; $counter <= $totalNumOfPages; $counter++){
                    if ($counter == $pagenum) {
                        echo "<li class='active'><a>".$counter."</a></li>";
                    }else{
                        echo "<li><a href='?pagenum=".$counter.$filterPage."'>".$counter."</a></li>";
                    }
                }
            }

            ?>

            <li <?php if($pagenum >= $totalNumOfPages){
                echo "class='disabled'";
            } ?>>
                <a <?php if($pagenum < $totalNumOfPages) {
                    echo "href='?pagenum=".$nextPage.$filterPage."'";
                } ?>>Next</a>
            </li>

            <?php if($pagenum < $totalNumOfPages){
                echo "<li><a href='?pagenum=".$totalNumOfPages.$filterPage."'>Last</a></li>";
            } ?>
        </ul>
    </section>
</main>

<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
        var $window = $(window);

        function checkWidth() {
            var windowsize = $window.width();
            if (windowsize < 992){
                var $animateInfo = $('.info');

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
            }
        }
        checkWidth();
        $(window).resize(checkWidth);
    });

    $('.productsFilter').click(function () {
        $('.productsSearch').toggle("slow")
    })
</script>

</body>
</html>
