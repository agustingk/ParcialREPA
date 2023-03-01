<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 bg-black-alpha d-flex align-items-center justify-content-center">
                <div class="">

                    <form action="<?php echo FRONT_ROOT . "Auth/Register" ?>" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="Usuario" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Nombre" name="name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="password">
                        </div>
                        <button type="submit" class="btn btn-secondary btn-lg btn-block">
                            Registrarme
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
