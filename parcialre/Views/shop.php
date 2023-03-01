<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3 bg-black-alpha d-flex align-items-center justify-content-center px-5">

                <div class="">

                    <span class="mb-5 text-center h1 d-block">Filtro</span>

                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">¿Qué estas buscando?</em>
                        </header>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-outline-light btn-lg mr-1" href="#">
                                <i class="fas fa-home"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg mx-1" href="#">
                                <i class="fas fa-car"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg mx-1" href="#">
                                <i class="fas fa-tv"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg ml-1" href="#">
                                <i class="fas fa-plane"></i>
                            </a>
                        </div>
                    </div>


                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">Precio</em>
                        </header>

                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Min</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Max</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">Habitaciones</em>
                        </header>

                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Min</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Max</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <main class="col-lg-9 bg-white">

                <div class="row py-3">
                    <article class="col-lg-3 mb-5">
                        <img src="../assets/images/products/real-estates/house-1.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5">Título del producto 1</h2>
                        <div class="description">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ 450.000</em>
                        </div>
                    </article>
                    <article class="col-lg-3 mb-5">
                        <img src="../assets/images/products/real-estates/house-2.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5">Título del producto 2</h2>
                        <div class="description">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ 420.000</em>
                        </div>
                    </article>
                    <article class="col-lg-3 mb-5">
                        <img src="../assets/images/products/real-estates/house-3.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5">Título del producto 3</h2>
                        <div class="description">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ 350.000</em>
                        </div>
                    </article>
                    <article class="col-lg-3 mb-5">
                        <img src="../assets/images/products/real-estates/house-4.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5">Título del producto 4</h2>
                        <div class="description">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ 280.000</em>
                        </div>
                    </article>
                    <article class="col-lg-3 mb-5">
                        <img src="../assets/images/products/real-estates/house-5.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5">Título del producto 5</h2>
                        <div class="description">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ 330.000</em>
                        </div>
                    </article>
                    <article class="col-lg-3 mb-5">
                        <img src="../assets/images/products/real-estates/house-6.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5">Título del producto 6</h2>
                        <div class="description">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ 180.000</em>
                        </div>
                    </article>
                </div>

            </main>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
