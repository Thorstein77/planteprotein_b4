<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <?php
    require ("php/head.php");
    ?>

<!-- Titel som ses oppe i browserens tab mv. -->
<title>Sigende titel</title>


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


    <br> <br>

<button class="Nyhedsbrev">Tilmeld Dig Nyhedsbrev</button>
</div>

<br>

    <div class="myDropdownBox">

        <div class="myOrders">
           <p>
            Ordrehistorik
           </p>
            <i class="fas fa-caret-down"></i>
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
<br> <br>
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
