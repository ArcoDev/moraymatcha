<?php  
    include_once './templates/header.php';
?>
<body>
    <!-- AD -->
    <section class="ad">
        <p><?= $ad ?></p>
    </section>
    <!--End AD-->
    <!--Navegation-->
    <nav class="navegation">
        <div class="box">
            <a href="" class="hamburger">
                <img src="build/img/hamburger.svg" alt="Icon menu">
            </a>
            <a href="index.php" rel="noopener">
                <div class="logo"></div>
            </a>
            <ul class="items">
                <!-- <li><a href="" onmouseover="showWine()" onmouseout="noneWine()" rel="noopener"><?= $wines ?></a></li> -->
                <li id="show-grid" class="show-subnav">
                    <a rel="noopener"><?= $wines ?></a>
                </li>
                <div id="grid-wine" class="container-grid">
                    <div class="grid-featured">
                        <h2>DESTACADOS DEL MES</h2>
                        <div class="text-center box-glider">
                            <img src="build/img/mov-malbelc.png" alt="Botella Malbec">
                            <h4>LUIGI BOSCA</h4>
                            <h5>Malbelc Terrior Los Miradores</h5>
                            <h6 class="mb-5">$5.937</h6>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                    </div>
                    <div class="items-list">
                        <a class="categoria">Tintos</a>
                        <ul class="sub-categoria">
                            <li><a href="#">Malbec</a></li>
                            <li><a href="#">Cabernet Sauvignon</a></li>
                            <li><a href="#">Cabernet Bouchet</a></li>
                            <li><a href="#">Cabernet Franc</a></li>
                            <li><a href="#">Blend</a></li>
                        </ul>
                    </div>
                    <div class="items-list">
                        <a class="categoria">Blancos</a>
                        <ul class="sub-categoria">
                            <li><a href="#">Chardonnay</a></li>
                            <li><a href="#">Sauvingnon Blanc</a></li>
                            <li><a href="#">Torrontes</a></li>
                            <li><a href="#">Resing</a></li>
                            <li><a href="#">Blend</a></li>
                        </ul>
                    </div>
                    <div class="items-list">
                        <a class="categoria">Espumantes</a>
                        <ul class="sub-categoria">
                            <li><a href="#">Brut Nature</a></li>
                            <li><a href="#">Extra Brut</a></li>
                        </ul>
                    </div>
                    <div class="items-list">
                        <a class="categoria">Especiales</a>
                        <ul class="sub-categoria">
                            <li><a href="#">Rose</a></li>
                            <li><a href="#">Gewurztraminer</a></li>
                        </ul>
                    </div>
                    <div class="items-list">
                        <a class="categoria">Ocaciones</a>
                        <ul class="sub-categoria">
                            <li><a href="#">Celebrar</a></li>
                            <li><a href="#">Regalar</a></li>
                            <li><a href="#">Descubrir</a></li>
                            <li><a href="#">Para todos los días</a></li>
                            <li><a href="#">Por estacionalidad</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <li><a href="" onmouseover="showLine()" onmouseout="noneLine()" rel="noopener"><?= $line ?></a></li> -->
                <li><a href="" rel="noopener"><?= $line ?></a></li>

                <li><a href="" rel="noopener"><?= $us ?></a></li>
                <li><a href="" w rel="noopener"><?= $contact ?></a></li>
            </ul>
        </div>
        <div class="box">
            <div class="search">
                <input type="text">
            </div>
            <span class="icon-search"></span>
            <div class="icons">
                <span class="user"></span>
                <span class="cart"></span>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $language ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="./detect-language.php?language=es">ESP</a></li>
                        <li><a class="dropdown-item" href="./detect-language.php?language=en">ENG</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--End Navegation-->

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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    <!--End Carousel-->

    <!--Menu-->
    <!-- <div class="container-fluid menu">
        <div class="row wine d-none">
            <div class="col-12 col-md-3 px-3 py-5 text-center">
                <h2>DESTACADOS DEL MES</h2>
                <div class="text-center box-glider">
                    <img src="build/img/mov-malbelc.png" alt="Botella Malbec">
                    <h4>SAN PABLO</h4>
                    <h5>Malbelc Terrior Los Miradores</h5>
                    <h6 class="mb-5">$5.937</h6>
                    <a href="#" rel="noopener">Comprar</a>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 col-md-2 p-3 m-3">
                        <h3>Tintos</h3>
                        <p>Malbec</p>
                        <p>Cabernet Sauvingon</p>
                        <p>Cabernet Bouchet</p>
                        <p>Cabernet Fran</p>
                        <p>Blend</p>
                        <a class="mas" href="#" rel="noopener">Ver más</a>
                    </div>
                    <div class="col-12 col-md-2 p-3 m-3">
                        <h3>Blancos</h3>
                        <p>Chardonay</p>
                        <p>Sauvingon Blanc</p>
                        <p>Torrentes</p>
                        <p>Riesling</p>
                        <p>Blend</p>
                        <a class="mas" href="#" rel="noopener">Ver más</a>
                    </div>
                    <div class="col-12 col-md-2 p-3 m-3">
                        <h3>Espumantes</h3>
                        <p>Brut Nature</p>
                        <p>Extra But</p>
                    </div>
                    <div class="col-12 col-md-2 p-3 m-3">
                        <h3>Especiales</h3>
                        <p>Rose</p>
                        <p>Gewurztraminer</p>
                    </div>
                    <div class="col-12 col-md-2 p-3 m-3">
                        <h3>Ocaciones</h3>
                        <p>Celebrar</p>
                        <p>Regalar</p>
                        <p>Descubrir</p>
                        <p>Para todos los días</p>
                        <p>Por estacionalidad</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-5 line d-none">
            <div class="col-12 col-md-3">
                <h3>San Pablo</h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="build/img/sanPablo.png" alt="Botella San Pablo">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Icono</p>
                        <p>Finca Los Nobles</p>
                        <p>De Sangre</p>
                        <p>Insignia</p>
                        <p>Espumantes</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <h3>La linda</h3>
                <img src="build/img/linda.png" alt="Botella La Linda">
            </div>
            <div class="col-12 col-md-3">
                <h3>Essencia San Pablo</h3>
                <img src="build/img/escencia.png" alt="Botella Essencia San Pablo">
            </div>
        </div>
    </div> -->

    <!--Shop Vinos-->
    <section class="shop">
        <h2><?= $titleShop ?></h2>
        <div class="container-wines">
            <div class="box-wines tintos">
                <p><?= $reds ?></p>
            </div>
            <div class="box-wines blancos">
                <p><?= $whites ?></p>
            </div>
            <div class="box-wines espuma">
                <p><?= $foaming ?></p>
            </div>
            <div class="box-wines especiales">
                <p><?= $specials ?></p>
            </div>
        </div>
    </section>
    <!--End Shop-->

    <!-- Recommended -->
    <section class="recommended">
        <h2><?= $titleRecommended ?></h2>
    </section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="glider-contain">
                    <div class="glider">
                        <div class="text-center box-glider">
                            <img src="build/img/mov-malbelc.png" alt="Botella Malbec">
                            <h4>SAN PABLO</h4>
                            <h5>Malbelc Terrior Los Miradores</h5>
                            <h6>$5.937</h6>
                            <p>Precio por botella $980</p>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                        <div class="text-center box-glider">
                            <img src="build/img/mov-chardonnay.png" alt="Botella Malbec">
                            <h4>Finca Los Nobles</h4>
                            <h5 class="mb-4">Chardonnay</h5>
                            <h6>$5.937</h6>
                            <p>Precio por botella $980</p>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                        <div class="text-center box-glider">
                            <img src="build/img/mov-cabernet.png" alt="Botella Malbec">
                            <h4>Finca los Nobles</h4>
                            <h5 class="mb-4">Cabernet Bouchet</h5>
                            <h6>$5.937</h6>
                            <p>Precio por botella $980</p>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                        <div class="text-center box-glider">
                            <img src="build/img/mov-pinot.png" alt="Botella Malbec">
                            <h4>SAN PABLO</h4>
                            <h5>Grand Pinot Noir - La Consulta</h5>
                            <h6>$5.937</h6>
                            <p>Precio por botella $980</p>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                        <div class="text-center box-glider">
                            <img src="build/img/mov-rose.png" alt="Botella Malbec">
                            <h4>SAN PABLO</h4>
                            <h5>Malbelc Terrior Los Miradores</h5>
                            <h6>$5.937</h6>
                            <p>Precio por botella $980</p>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                        <div class="text-center box-glider">
                            <img src="build/img/mov-malbelc.png" alt="Botella Malbec">
                            <h4>Finca Los Nobles</h4>
                            <h5>Malbelc Terrior Los Miradores</h5>
                            <h6>$5.937</h6>
                            <p>Precio por botella $980</p>
                            <a href="#" rel="noopener">Comprar</a>
                        </div>
                    </div>

                    <button aria-label="Previous" class="glider-prev">
                        <</button> <button aria-label="Next" class="glider-next">>
                    </button>
                    <div role="tablist" class="dots"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Recommended -->

    <!-- Banner1 -->
    <section class="banner">
        <p><?= $titleBanner1 ?></p>
        <h3><?= $subBanner1 ?></h3>
        <a href="#" rel="noopener"><?= $btnBanner1 ?></a>
    </section>
    <!--End Banner1-->

    <!-- Sold vinos -->
    <section class="sold">
        <h2><?= $titleSold ?></h2>
        <div class="container-sold">
            <div class="box-sold">
                <img lazy="loading" src="build/img/malbel.png" alt="malbel">
                <h4>SAN PABLO</h4>
                <h5>Malbelc Terrior Los Miradores</h5>
                <h6>$5.937</h6>
                <p>Precio por botella $980</p>
                <a href="#" rel="noopener">Comprar</a>
            </div>
            <div class="box-sold">
                <img lazy="loading" src="build/img/cabernet.png" alt="Cabernet">
                <h4>FINCA LOS NOBLES</h4>
                <h5 class="txtBt">Cabernet Bouchet</h5>
                <h6>$5.937</h6>
                <p>Precio por botella $980</p>
                <a href="#" rel="noopener">Comprar</a>
            </div>
            <div class="box-sold">
                <img lazy="loading" src="build/img/alma.png" alt="Del Alma">
                <h4>SAN PABLO</h4>
                <h5>Del Alma</h5>
                <h6>$5.937</h6>
                <p>Precio por botella $980</p>
                <a href="#" rel="noopener">Comprar</a>
            </div>
            <div class="box-sold">
                <img lazy="loading" src="build/img/brut.png" alt="Brut">
                <h4>SAN PABLO</h4>
                <h5>Brut</h5>
                <h6>$5.937</h6>
                <p>Precio por botella $980</p>
                <a href="#" rel="noopener">Comprar</a>
            </div>
    </section>
    <!-- End Sold vinos -->

    <!-- Banner 2 -->
    <section class="banner2 banner">
        <h3><?= $titleBanner2 ?></h3>
        <a href="#" rel="noopener"><?= $btnBanner2 ?></a>
    </section>
    <!-- End Banner 2 -->

    <!-- Benefits -->
    <section class="benefits">
        <h2><?= $titleBenefit ?></h2>
        <div class="container-benefits">
            <div class="box-benefits">
                <img src="build/img/envio.svg" alt="Icon de envios">
                <p class="one"><?= $send ?></p>
            </div>
            <div class="box-benefits">
                <img src="build/img/tarjeta.svg" alt="Icon de tarjetas">
                <p class="two"><?= $share ?></p>
            </div>
            <div class="box-benefits">
                <img src="build/img/tiempos.svg" alt="Icon de tiempos">
                <p>
                    <a href="#" rel="noopener"><?= $titleBenefit ?></a>
                </p>
            </div>
            <div class="box-benefits">
                <img src="build/img/asistencia.svg" alt="Icon de asistencia">
                <p><?= $attendance ?></p>
            </div>
        </div>
    </section>
    <!-- End Benefits -->

    <!-- Newsletter -->
    <article class="newsletter">
        <div class="box-news">
            <div class="mail">
                <img src="build/img/mail.svg" alt="Icon de mail">
                <h3><?= $titleNews ?></h3>
            </div>
            <p><?= $subscribe ?></p>
        </div>
        <div class="box-news">
            <div class="box-form">
                <form action="">
                    <div class="box-input">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" placeholder="Ingresar correo electrónico">
                    </div>
                    <button type="submit"><?= $btnSubs ?></button>
                </form>
            </div>
        </div>
    </article>
    <!-- Newsletter -->

    <!-- Cancel -->
    <section class="cancel">
        <h3><?= $titleCancel ?></h3>
        <p><?= $descCancel ?></p>
        <a href="#" rel="noopener"><?= $btnCancel ?></a>
    </section>
    <!-- End Cancel -->
<?php  
    include_once './templates/footer.php';
?>