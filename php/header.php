<header>

    <div class="headerGradient">

    </div>

    <div class="headerLogo">
        <a href="index.php"><img src="images/LogoHvid.png"></a>
    </div>


    <nav>

        <label for="drop" class="toggle">
            <img src="images/Burger.png">
        </label>

        <input type="checkbox" id="drop" />

        <ul class="menu">
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li><a href="products.php">Produkter</a></li>
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li><a href="blog.php">Blog</a></li>
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li><a href="customerservice.php">Kundeservice</a></li>
            <hr class="menuHrLinje" align="center" noshade="noshade" width="90%">
            <li class="menuLogInd"><a href="userPage.php">Log ind</a></li>
        </ul>
    </nav>

    <div class="shoppingCart">
        <div class="shoppingIcon">
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>



</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $('.toggle').click(function () {
        $('.menu').toggle("slow")
    })
</script>