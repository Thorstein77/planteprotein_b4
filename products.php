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
    <h1></h1>

    <p>

    </p>

    <div>
        <input>

        <i class="fas fa-search"></i>
    </div>

    <aside>
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

    <section>
        <div>
            <h2>
                Vega Protein &
                Greens proteinpulver
            </h2>
            
            <img>

            <div>
                <h3></h3>

                <div>
                    <div>
                        <img>
                        <img>
                        <img>
                        <img>
                    </div>

                    <p>pris</p>
                </div>
            </div>

            <button>Læg i kurv</button>
        </div>
    </section>
</main>

<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>
