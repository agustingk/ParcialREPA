<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-5 text-center">Agregar Propiedad</h1>

            <form action="<?php echo FRONT_ROOT . "RealEstate/Add" ?>" method="post">
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control form-control-lg" name="title" required>
                </div>

                <div class="form-group">
                    <label for="">Descripción</label>
                    <input type="text" class="form-control form-control-lg" name="description" required>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Habitaciones</label>
                            <input type="number" class="form-control form-control-lg" name="bedrooms" required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Parking</label>
                            <div class="form-check mt-3">
                                <input type="hidden" name="parking" value="0" id="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="parking" >
                                <label class="form-check-label" for="defaultCheck1">
                                    ¿Tiene cochera?
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" class="form-control form-control-lg" name="price" required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control form-control-lg" name="city" required>
                        </div>
                    </div>
               

                <button type="submit" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
