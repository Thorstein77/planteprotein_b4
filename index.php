<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <?php
    require ("php/head.php");
    ?>
<!-- Titel som ses oppe i browserens tab mv. -->
<title>plante-protein</title>

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php");
?>
<div class="index">
    <section class="slideshow">
        <div class="slide">
            <img src="images/PlaceholderDoggo.jpg">
            <button class="slideButton">Læs det her</button>
        </div>
        <div class="slide">
            <img src="images/PlaceholderDoggo.jpg">
            <button class="slideButton">Læs mere</button>
        </div>

        <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-angle-left"></i>
        </a>
        <a class="next" onclick="plusSlides(1)"><i class="fas fa-angle-right"></i>
        </a>
    </section>

    <section class="weOffer">
        <h1>Vi tilbyder</h1>
        <div class="flexContainer">
            <div class="flex">
                <div class="flexObject">
                    <i class="fas fa-exchange-alt"></i>
                    <p>30 Dages <br>returret</p>
                </div>
                <div class="flexObject">
                    <i class="fas fa-truck"></i>
                    <p>Fri fragt <br>over 700 kr.</p>
                </div>
            </div>
            <div class="flex">
                <div class="flexObject">
                    <i class="far fa-calendar-alt"></i>
                    <p>Dag til dag <br>levering</p>
                </div>
                <div class="flexObject">
                    <i class="fas fa-hand-holding-heart"></i>
                    <p>100 % <br>Vegansk</p>
                </div>
            </div>
        </div>
    </section>

    <section class="popularProduct">
        <div class="popular">
            <p>Populære produkter</p>
            <button type="button">Shop</button>
        </div>
        <div class="popular">
            <img src="images/placeholderProteinpulver.jpg">
        </div>
    </section>

    <section class="newsletter">
        <h1>Tildmeld nyhedsbrev</h1>
        <p>Bare rolig du bliver ikke Spammet! vi syntes også selv at det er møgirriterende.</p>
        <form>
            <label for=""></label>
            <input type="text" name="email" id="" value="" placeholder="Indtast e-mail"><br>
            <button type="submit">Tilmeld</button>
        </form>
    </section>

    <section class="about">
        <h1>Om os</h1>
        <div class="aboutTxt">
            <p>
                Vores værdier er helt klare:<br>
                Da jeg stiftede plante-protein.dk var det med det formål at  gøre det muligt for den danske forbruger at få fat i plantebaseret proteinpulver, nemt, hurtigt og til en overkommelig pris.<br><br>
                Inden Da skulle kunderne selv importerer produkter fra udlandet og risikerer enormt høje skatter og told, samt en alt for lang leveringstid.<br><br>
                Men alt det besvær er ovre nu, vi levere fra dag til dag og du kan til enhver tid indenfor 30 dage få dine penge refunderet.<br><br>
                Ud over fordelene ved at handle hos os, får du oven i købet et yderst velsmagende proteinkilde.
            </p>
        </div>
        <div class="imgBox">
            <img src="images/aboutIMG.jpg">
            <div class="quote">
                <p>“Vores mål er at skabe en samling produkter som vil falde i de flestes smag, på højde med traditionelle tilskud eller bedre. ”</p>
            </div>
        </div>
    </section>
</div>
<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    //Index -------------------------------------
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slide");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
    //Index -------------------------------------
</script>

</body>
</html>
