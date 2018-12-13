<header>

    <div class="headerGradient">

    </div>

    <div class="headerLogo">
        <img src="images/LogoHvid.png">
    </div>


    <nav>

        <label for="drop" class="toggle">
            <img src="images/Burger.png">
        </label>

        <input type="checkbox" id="drop" />

        <ul class="menu">
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li><a href="#">Produkter</a></li>
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li><a href="#">Blog</a></li>
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li><a href="#">Kundeservice</a></li>
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li class="menuLogInd"><a href="#">Log ind</a></li>
        </ul>
    </nav>





</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $('.toggle').click(function () {
        $('.menu').toggle("slow")
    })
</script>