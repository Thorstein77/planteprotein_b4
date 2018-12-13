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

        <h2></h2>

        <div class="grid">
            <div id="gridItem1">
                <h3>Type</h3>

                <ul>
                    <li>
                        <input type="checkbox">
                        Proteinpulver
                    </li>
                    <li>
                        <input type="checkbox">
                        Proteinpulver
                    </li>
                </ul>
            </div>

            <div id="gridItem2">
                <h3>Smag</h3>

                <ul>
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
                        Neutral
                    </li>
                    <li>
                        <input type="checkbox">
                        Bær
                    </li>
                    <li>
                        <input type="checkbox">
                        Kokos
                    </li>
                </ul>
            </div>

            <div id="gridItem3">
                <h3>Mærke</h3>

                <ul>
                    <li>
                        <input type="checkbox">
                        Multipower
                    </li>
                    <li>
                        <input type="checkbox">
                        The Protein Works
                    </li>
                    <li>
                        <input type="checkbox">
                        Scitech Nutrition
                    </li>
                    <li>
                        <input type="checkbox">
                        GymQueen
                    </li>
                    <li>
                        <input type="checkbox">
                        Plantforce
                    </li>
                </ul>
            </div>

            <div id="gridItem4">
                <h3>&#8205;</h3>

                <ul>
                    <li>
                        <input type="checkbox">
                        Rawfusion
                    </li>
                    <li>
                        <input type="checkbox">
                        SunWarrior
                    </li>
                    <li>
                        <input type="checkbox">
                        Hej Neutral
                    </li>
                    <li>
                        <input type="checkbox">
                        Vega
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <section class="productsSection">
        <div class="product">

            <a href="#">
                <h2>
                    Vega Protein &<br>
                    Greens proteinpulver
                </h2>

                <img src="images/vega-protein-greens-proteinpulver.png" alt="vega protein greens vegansk proteinpulver">

                <div class="info">

                    <div class="gradient"></div>

                    <h3>Vanilje | Chokolade</h3>

                    <div class="price">

                        <div class="icons">
                            <div class="iconImg">
                                <img src="images/icons/gluten.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/soy.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/lactose.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/organic.png">
                            </div>
                        </div>

                        <p>299,-</p>
                    </div>
                </div>
            </a>

            <div class="flex">
                <button>Læg i kurv</button>
            </div>
        </div>

        <div class="product">

            <a href="#">
                <h2>
                    Vega Protein &<br>
                    Greens proteinpulver
                </h2>

                <img src="images/vega-protein-greens-proteinpulver.png" alt="vega protein greens vegansk proteinpulver">

                <div class="info">

                    <div class="gradient"></div>

                    <h3>Vanilje | Chokolade</h3>

                    <div class="price">

                        <div class="icons">
                            <div class="iconImg">
                                <img src="images/icons/gluten.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/soy.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/lactose.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/organic.png">
                            </div>
                        </div>

                        <p>299,-</p>
                    </div>
                </div>
            </a>

            <div class="flex">
                <button>Læg i kurv</button>
            </div>
        </div>

        <div class="product">

            <a href="#">
                <h2>
                    Vega Protein &<br>
                    Greens proteinpulver
                </h2>

                <img src="images/vega-protein-greens-proteinpulver.png" alt="vega protein greens vegansk proteinpulver">

                <div class="info">

                    <div class="gradient"></div>

                    <h3>Vanilje | Chokolade</h3>

                    <div class="price">

                        <div class="icons">
                            <div class="iconImg">
                                <img src="images/icons/gluten.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/soy.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/lactose.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/organic.png">
                            </div>
                        </div>

                        <p>299,-</p>
                    </div>
                </div>
            </a>

            <div class="flex">
                <button>Læg i kurv</button>
            </div>
        </div>

        <div class="product">

            <a href="#">
                <h2>
                    Vega Protein &<br>
                    Greens proteinpulver
                </h2>

                <img src="images/vega-protein-greens-proteinpulver.png" alt="vega protein greens vegansk proteinpulver">

                <div class="info">

                    <div class="gradient"></div>

                    <h3>Vanilje | Chokolade</h3>

                    <div class="price">

                        <div class="icons">
                            <div class="iconImg">
                                <img src="images/icons/gluten.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/soy.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/lactose.png">
                            </div>

                            <div class="iconImg">
                                <img src="images/icons/organic.png">
                            </div>
                        </div>

                        <p>299,-</p>
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
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

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
                console.log('lalablah');
            }else{
                $object.removeClass('inView');
            }
        });
    }
</script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">

</script>

</body>
</html>
