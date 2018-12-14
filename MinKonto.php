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

<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->

<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="titel" >

<meta property="og:type" content="website" >

<meta property="og:url" content="http://www.domain.dk" >

<meta property="og:image" content="https://www.domain.dk/img.jpg" >

<meta property="og:description" content="Beskrivelse" >

<meta property="og:locale" content="da_DK" >

    <?php
    require ("php/head.php");
    ?>

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php");
?>

<main class="myAccount">

    <div class="myHeader">
        <h1>
            Min Konto
        </h1>
    </div>

<div class="myInfobox">

    <div class="myInfoheader">
        <h3>
            Mine Oplysninger <br> <br>
        </h3>
    </div>
    <div class="myInfotxt1">
        <p>
            Navn: Jens Jensen <br>
            Adresse: Slagelsevej 12<br>
            Postnummer: 4400<br>
            By: Kalundbronx
        </p>

       <div class="myInfoTxt2">
           <p>
           Telefon: 12233345 <br>
           E-Mail: jens.jensen@gmail.com <br>
           </p>
       </div>
    </div

        <br><br>

</div>

   <button class="myButtonedit">
      <p>Ret</p>
   </button>

<br><br>
  <button class="myPassword">Ændre Mit Password</button>

    <br>


<div class="myInputbox">

    <label class="myContainer">
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>


    <br>

<button class="Nyhedsbrev">Tilmeld Dig Nyhedsbrev</button>
</div>

<br>

    <div class="myDropdownBox">

        <div class="myOrders">
           <p>
               Ordrehistorik
           </p>
        </div>

        <div class="myHistory">
            <ul>
                <li>
                    Ordrenummer. 13122409 <br>
                    Dato: 24-09-18 <br>
                    Produkt Protein Nutrition <br> <br>
                </li>
                <li>
                    Ordrenummer. 50132410 <br>
                    Dato: 01-07-18 <br>
                    Produkt Protein Nutrition <br> <br>
                </li>

                <li>
                    Ordrenummer. 90008320 <br>
                    Dato: 20-03-18 <br>
                    Produkt Protein Nutrition <br> <br>
                </li>

            </ul>

        </div>

    </div>

</main>

<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her

    $('.myOrders').click(function () {
        $('.myHistory').toggle("slow")
    })

});
</script>

</body>
</html>
