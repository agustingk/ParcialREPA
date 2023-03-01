<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-5 text-center">Agregar Vehículo</h1>

            <form action="<?php echo FRONT_ROOT . "Vehicle/Add" ?>" method="post">

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
                            <label for="">Año</label>
                            <input type="number" class="form-control form-control-lg" min="1800" max="2022" name="year" required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" class="form-control form-control-lg" name="price" required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Ciudad</label>
                            <input type="text" class="form-control form-control-lg" name="city" required>
                        </div>
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
