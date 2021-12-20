 <!-- Footer -->
 <footer class="container-fluid footer mt-5">
        <div class="row px-3">
            <div class="col-12 col-md-4">
                <img src="build/img/logoGolden.svg" alt="Icon Vinimos">
                <h3>Bodega Luigi Bosca</h3>
                <p class="w-50">
                    <a href="https://n9.cl/sanpablo" rel="noopener">San Martin 2044, Lújan de Cuto, Mendoza, M5507EUP,
                        Argentina</a>
                </p>
                <img class="my-4 qr-desk" lazy="loading" src="build/img/qr.png" alt="Qr Vinimos">
                <hr class="mov-line">
            </div>
            <div class="col-12 col-md-6 d-flex p-0">
                <div class="col">
                    <h4 class="mb-4"><?= $products ?></h4>
                    <p>Tintos</p>
                    <p>Blancos</p>
                    <p>Espumantes</p>
                    <p>Otros</p>
                </div>
                <div class="col">
                    <h4 class="mb-4"><?= $line ?></h4>
                    <p>San Pablo</p>
                    <p>San Pablo Gala</p>
                    <p>San Pablo Fina Los Nobles</p>
                    <p>San Pablo Mix</p>
                    <p>La Linda</p>
                    <p>Escencia San Pablo</p>
                    <p>#MovistarArena</p>
                </div>
                <div class="col">
                    <h4 class="mb-4"><?= $sinews ?></h4>
                    <p><?= $questions ?></p>
                    <p><?= $terms ?></p>
                    <p><?= $privacy ?></p>
                </div>
                <div class="col">
                    <h4><?= $institutional ?></h4>
                </div>
            </div>
            <div class="col-12 col-md-2 p-0">
                <hr class="mov-line">
                <a class="mx-2" href="#"><img src="build/img/email.svg" alt="Icon Email"></a>
                <a class="mx-2" href="#"><img src="build/img/facebook.svg" alt="Icon Facebook"></a>
                <a class="mx-2" href="#"><img src="build/img/instagram.svg" alt="Icon Instagram"></a>
                <hr class="mov-line">

            </div>
            <div class="col-12 copyright text-center">
                <hr>
                <img class="my-4 qr-mov" lazy="loading" src="build/img/qr.png" alt="Qr Vinimos">
                <p><?= $copyright ?></p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- CDN JS Bootstrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!--Glider JS -->
    <script src="build/js/glider.min.js"></script>
    <!-- JS Personal -->
    <script src="build/js/main.js"></script>
</body>

</html>