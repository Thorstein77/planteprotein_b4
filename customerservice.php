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
    <title>Kundeservice - plante-protein.dk</title>
    <link rel="canonical" href="http://plante-protein.dk/customerservice.php">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php");
?>

<main class="kundeservice">

    <h1 class="kundeserviceOverskrift">Kundeservice</h1>

    <div class="kundeserviceTekst1">

        <p>Stil os et spørgsmål. Hos Plante-proteiner.dk er vi altid
        klar til at hjælpe vores kunder, uanset hvad du spørg om.</p>

    </div>

    <div class="kundeserviceTekst2">

        <p>Vi svarer altid inden for 1 - 2 dage
        <br><br>
        Tlf. tid:
        9 - 14 man - fre</p>

    </div>

    <div class="kundeserviceBillede">

        <img src="images/collared-shirt.jpg" alt="ejer af plante-protein.dk">

    </div>

    <div class="kundeserviceFormularer">

        <form method="post" action="customerservice.php">

        <label for="beskrivelse">Beskriv dit spørgsmål</label>

            <br>

            <textarea name="beskrivelse" id="beskrivelse" rows="10">

            </textarea>

        </form>

        <form method="post" action="customerservice.php">

            <input type="text" name="e-mail" id="e-mail" placeholder="Indtas e-mail" value="">

        </form>

    </div>

    <div class="kundeserviceKnap">

        <button type="submit">Spørg</button>

    </div>


</main>

<?php
require ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script></script>

</body>
</html>
