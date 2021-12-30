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
        <li><a href="#whats-matcha">¿Qué es matcha?</a></li>
        <li><a href="#about">Quiénes somos</a></li>
        <li><a href="#benefits">Beneficios</a></li>
        <li><a href="#matcha">Matcha</a></li>
        <li><a href="#contact">Contacto</a></li>
    </ul>
    <div class="search">
        <div class="icon-search"></div>
        <input class="input-desc" type="search" name="search">
        <input class="input-mov" type="search" name="search" id="search" placeholder="Buscar...">
        <span id="close-search" class="close-search">X</span>
    </div>
    <div class="icons">
        <a href="#" id="icon-search" class="search"></a>
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
        <!-- <div class="box-text">
            <h1><?= $title ?></h1>
            <a href="#" rel="noopener ">
                <button class="btn btn-buy"><?= $btnComprar ?></button>
            </a>
        </div> -->
        <div class="carousel-item active">
            <a href="#">
                <div class="slider slider1"></div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="#">
                <div class="slider slider2"></div>
            </a>
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

<!-- What is matcha -->
<div id="whats-matcha"></div>
<section class="whats-matcha">
    <h2>¿QUÉ ES MATCHA?</h2>
    <div class="box-matcha">
        <div class="text-matcha">
            <p>Té matcha orgánico puro es una planta ancestral, importada de los campos de Japón y elaborado con hojas
                de té verde premium.</p>
            <p>Nuestro matcha pasa por un proceso de molido artesanal para la conservación de sus nutrientes. </p>
        </div>
    </div>
    <img class="img-matcha" src="build/img/img-plato.png" alt="image matcha">
    <a href="#" class="btn-matcha">ver más</a>
</section>
<!-- End what is matcha -->

<!-- Abouts -->
<div id="about"></div>
<section class="about">
    <div class="box-about">
        <h2>¿QUIÉNES SOMOS?</h2>
        <img src="build/img/hoja.svg" alt="image matcha">
        <p>Mora y matcha es una tienda online de matcha orgánico, nos enfocamos en ofrecer un cálido y ágil servicio al
            cliente, por lo que tus compras serán entregadas en el menor tiempo posible, además de brindarte una
            plataforma intuitiva para que puedas realizar tus compras de manera prática, segura y con costos de envío
            incluidos a partir de compras mínimas.</p>
        <p>Mora y matcha es una empresa creada por jóvenes mexicanos interesados en el bienestar de las personas y
            enfocados en dos objetivos principales: que hagas del matcha un estilo de vida para que puedas experimentar
            el poder curativo y antioxidante que nos brinda esta planta ancestral y ayudarte a mejorar tus días para
            comenzar la mañana con energía,enfoque, concentración y claridad.</p>
    </div>
    <img class="tasa" src="build/img/tasa.png" alt="image matcha">
</section>
<!-- End Abouts -->

<!-- Benefits -->
<div id="benefits"></div>
<section class="benefits">
    <h2>Beneficios</h2>
    <div class="container-benefits">
        <div class="box-benefits">
            <img src="build/img/send.svg" alt="Image matcha">
            <p class="one">Envío ágil</p>
        </div>
        <div class="box-benefits">
            <img src="build/img/asistencia.svg" alt="Image matcha">
            <p class="two">Asistencia online</p>
        </div>
        <div class="box-benefits">
            <img src="build/img/compra.svg" alt="Image matcha">
            <p>Compra Segura</p>
        </div>
    </div>
</section>
<!-- End Benefits -->

<!-- Box Te -->
<div id="matcha"></div>
<section class="te">
    <div class="box-gradient">
        <div class="info-te">
            <img class="icon-te" src="build/img/icon-te.svg" alt="Image matcha">
            <h3>Matcha $198.00</h3>
            <p>Precio por bolsa $200</p>
            <a href="#">Comprar</a>
            <img class="img-hoja" src="build/img/hoja-te.svg" alt="Image matcha">
        </div>
        <div class="img-te">
            <img src="build/img/te.svg" alt="Image matcha">
        </div>
    </div>
</section>
<!-- End Te -->

<!-- Newsletter -->
<div id="contact"></div>
<article class="newsletter">
    <div class="box-news">
        <div class="mail">
            <img src="build/img/mail.svg" alt="Icon de mail">
            <h3>Newsletter</h3>
        </div>
        <p>Suscríbete para recibir recetas, promociones y tips de bienestar.</p>
    </div>
    <div class="box-news">
        <div class="box-form">
            <form action="">
                <div class="box-input">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="Ingresar correo electrónico">
                </div>
                <button type="submit">Suscribirme</button>
            </form>
        </div>
    </div>
</article>
<!-- Newsletter -->


<?php 
    include_once './templates/footer.php';
?>