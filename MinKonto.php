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
</div>

   <button class="myButtonedit">Ret Mine Oplysninger</button>


  <button class="myPassword">Ændre Mit Password</button>

<div class="myInputbox">

    <label class="container">
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

<button class="Nyhedsbrev">Tilmeld Dig Nyhedsbrevet</button>

</div>

    <div class="myDropdownBox">

        <div class="myOrders">
            Ordrehistorik
        </div>

        <div class="myHistory">
            <ul>
                <li>hej</li>
                <li>farvel</li>

            </ul>

        </div>

    </div>

</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her


});
</script>

</body>
</html>
