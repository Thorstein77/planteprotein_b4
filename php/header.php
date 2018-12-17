<header>

    <div class="headerGradient">

    </div>

    <div class="headerLogo">
        <a href="index.php"><img src="images/LogoHvid.png" alt="logo, plante-protein"></a>
    </div>


    <nav>

        <label for="drop" class="toggle">
            <img src="images/Burger.png" alt="menu">
        </label>

        <input type="checkbox" id="drop" />

        <ul class="menu">

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="products.php">Produkter</a>
            </li>

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="blog.php">Blog</a>
            </li>

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="customerservice.php">Kundeservice</a>
            </li>

            <li class="menuLogInd">
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="userPage.php">Log ind</a>
            </li>
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