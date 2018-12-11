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

<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="titel" >

<meta property="og:type" content="website" >

<meta property="og:url" content="http://www.domain.dk" >

<meta property="og:image" content="https://www.domain.dk/img.jpg" >

<meta property="og:description" content="Beskrivelse" >

<meta property="og:locale" content="da_DK" >


</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<?php
require ("php/header.php");
?>





<main class="blogContent">

    <div class="blogSearchcontent"></div>



<div class="blogOverheader">
    <h1>
        Blog
    </h1>
</div>

<div class="blogHeader">
    <h2>
        5 Plantebaseret protienkilder
    </h2>
</div>

<div class="blogInfobox">
    <div class="blogInfo">
        <p>
            Af: Sarah Hofmann <br>
            Læsetid: ca. 10 min.
        </p>
    </div>

    <div class="blogInfoshare">
            <a href="">
                <p>
                    DEL
                </p>
                    <i class="fas fa-share"></i>
            </a>

    </div>
    <div class="blogInfodate"></div>
</div>



<div class="blogLink"></div>



<article class="blogIntro"></article>



<article class="blog">
    <div class="blogHeader1"></div>
    <div class="blogPic1"></div>
    <div class="blogTxt1"></div>

    <div class="blogHeader2"></div>
    <div class="blogPic2"></div>
    <div class="blogTxt2"></div>

    <div class="blogHeader3"></div>
    <div class="blogPic3"></div>
    <div class="blogTxt3"></div>

    <div class="blogHeader4"></div>
    <div class="blogPic4"></div>
    <div class="blogTxt4"></div>

    <div class="blogHeader5"></div>
    <div class="blogPic5"></div>
    <div class="blogTxt5"></div>
</article>

<div class="blogReadothers"></div>

<div class="blogOther">
    <div class="blogOther1"></div>
    <div class="blogOther2"></div>
    <div class="blogOther3"></div>
    <div class="blogOther4"></div>
</div>

</main>










<?php
require ("php/footer.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her
});
</script>

</body>
</html>
