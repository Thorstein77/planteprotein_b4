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

<title>plante-protein.dk</title>
    <link rel="canonical" href="http://plante-protein.dk/index.php">


</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<?php

// Denne side er sat op af Sabine
// PHP kode på denne side er efterfølgende skrevet af Kristian

require ("php/header.php");
?>

<!--Index indhold - Sabine-->
<div class="index">
<!--Slideshow for mobil og tablet liggende-->
        <div class="slideshow">
            <div class="slides fade">
                <h2>Læs vores blog!</h2>
                <img src="images/slideshow/slideBlog.png" alt="Grøntsager. Læs blog om plantebaserede proteinkilder">
                <h3>5 Plantebaserede proteinkilder</h3>
                <p>- Af Sarah Hofmann</p>
                <div class="slideButton"><a href="blog.php">Læs det her</a></div>
            </div>

            <div class="slides fade">
                <h2>Til den lille sult!</h2>
                <img src="images/slideshow/slideProduct.png" alt="Alt Stars All Natural Oatcakes">
                <h3>Lige nu kan du købe 10 stk. <br>All Stars Oatcakes for 100 kr.</h3>
                <p>- Normal pris: 16 kr. pr. stk.</p>
                <div class="slideButton"><a href="product.php?pid=16">Se produkt</a></div>
            </div>
            <!-- From & tilbage -->
            <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-angle-left"></i></a>
            <a class="next" onclick="plusSlides(1)"><i class="fas fa-angle-right"></i></a>
        </div>



    <section class="weOffer">
        <h1>Vi tilbyder</h1>
        <div class="flexContainer">
            <div class="flex">
                <div class="flexObject">
                    <i class="fas fa-exchange-alt"></i>
                    <p>30 Dages <br>returret</p>
                    <a href="#">Dine rettigheder</a>
                </div>
                <div class="flexObject">
                    <i class="fas fa-truck"></i>
                    <p>Fri fragt <br>over 700 kr.</p>
                    <a href="#">Se betalingsbetingelser</a>
                </div>
            </div>
            <div class="flex">
                <div class="flexObject">
                    <i class="far fa-calendar-alt"></i>
                    <p>Dag til dag <br>levering</p>
                    <a href="#">Se vilkår</a>
                </div>
                <div class="flexObject">
                    <i class="fas fa-hand-holding-heart"></i>
                    <p>100 % <br>Vegansk</p>
                    <a href="products.php">Gå til produkter</a>
                </div>
            </div>
        </div>
    </section>

    <section class="popularProduct">
        <div class="popular1">
            <h1>Populære produkter</h1>
            <div class="popular11"><a href="products.php">Shop</a></div>
        </div>
        <div class="popular2">
            <img src="images/productImages/vega-one-alt-i-en-shake-vegansk-proteinpulver.png" alt="Et af vores populære produkter, Vega one, alt i en shake. Vegansk proteinpulver">
        </div>
    </section>

    <section class="newsletter">
        <h1>Tilmeld nyhedsbrev</h1>
        <p>Bare rolig du bliver ikke Spammet! vi syntes også selv at det er møgirriterende.</p>
        <p style="max-width: 600px; margin: 30px auto 0 auto;">
            Synes du at veganske opskrifter er toppen, men eventuelt mangler inspiration til hvordan du får mere proteinrig kost hverdagen, sammensætter en sund og fiberrig kost plan eller er du bare fan af vores velsmagende produkter og ønsker at blive informeret om tilbud og nye varianter.
        </p>
        <p>
            Så kan du rolig tilmelde dig, vi har også andet at lave end at sende mails ud.
        </p>
        <form>
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Indtast e-mail"><br>
            <button type="submit">Tilmeld</button>
        </form>
    </section>

    <section class="about">
        <h1>Om os</h1>
        <div class="aboutFlex">
            <div class="aboutTxt">
                <p>
                    Vores værdier er helt klare:<br>
                    Da jeg stiftede plante-protein.dk var det med det formål at
                    gøre det muligt for den danske forbruger at få fat i plantebaseret
                    proteinpulver, nemt, hurtigt og til en overkommelig pris.<br><br>
                    Inden da skulle kunderne selv importerer produkter fra udlandet og
                    risikerer enormt høje skatter og told, samt en alt for lang leveringstid.<br><br>
                    Men alt det besvær er ovre nu, vi levere fra dag til dag og du kan
                    til enhver tid indenfor 30 dage få dine penge refunderet.<br><br>
                    Ud over fordelene ved at handle hos os, får du oven i købet et yderst velsmagende proteinkilde.
                </p>
            </div>
            <div class="imgBox">
                <img src="images/aboutIMG.jpg" alt="Stifter, Ivan Riener"><!--Placeholder stockfoto for ikke at krænke kundens privatliv. Ville blive udskiftet med foto af ham hvis opgaven skulle bruges af firmaet i virkeligheden.-->
                <div class="quote">
                    <p>“Vores mål er at skabe en samling produkter som vil falde i de flestes smag,
                        på højde med traditionelle tilskud eller bedre. ”</p>
                </div>
        </div>
        </div>
    </section>
</div>
<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    //Index -------------------------------------
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slides");

        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }
    //Index -------------------------------------
</script>

</body>
</html>
