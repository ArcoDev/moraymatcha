<?php 
    include_once './templates/header.php'
?>

<!-- AD -->
<section class="ad">
    <p><?= $ad ?></p>
</section>
<!--End AD-->
<!-- Navegation -->
<nav class="nav-mora">
    <a class="icons-mov" href="#">
        <div class="nav-logo"></div>
        <div class="icon-logo"></div>
        <div id="nav-mov" class="hamburguer"></div>
    </a>
    <ul class="links">
        <li><a href="#">¿qué es matcha?</a></li>
        <li><a href="#">Quiénes somos</a></li>
        <li><a href="#">Beneficios</a></li>
        <li><a href="#">Matcha</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
    <div class="search">
        <div class="icon-search"></div>
        <input class="input-desc" type="search" name="search">
        <input class="input-mov" type="search" name="search" id="search" placeholder="Buscar...">
    </div>
    <div class="icons">
        <a href="#" class="search"></a>
        <a href="#" class="user"></a>
        <a href="#" class="cart"></a>
    </div>

</nav>
<!-- Fin Navegation -->

<!-- Icon Flotante -->
<a href="#" rel="noopener">
        <div class="icon-float"></div>
    </a>
    <!-- End Icon Flotante -->

<!--Carousel-->
<section id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="box-text">
            <h1><?= $title ?></h1>
            <a href="#" rel="noopener ">
                <button class="btn btn-buy"><?= $btnComprar ?></button>
            </a>
        </div>
        <div class="carousel-item active">
            <div class="slider slider1"></div>
        </div>
        <div class="carousel-item">
            <div class="slider slider2"></div>
        </div>
        <div class="carousel-item">
            <div class="slider slider3"></div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
<!--End Carousel-->

<?php 
    include_once './templates/footer.php';
?>