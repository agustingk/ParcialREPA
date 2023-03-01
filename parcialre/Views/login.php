
<body id="login-page" class="bg-living bg-cover">

    <div class="container-fluid">
        <div class="row">

                <div class="col-lg-4 bg-black-alpha d-flex align-items-center justify-content-center">
                    <div class="">

                        <h1 class="mb-5 text-center">LAB 4 - 2do. Parcial</h1>

                        <form action="<?php echo FRONT_ROOT . "Auth/Login" ?>" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" placeholder="Usuario" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="password">
                            </div>
                            <button type="submit">
                                Iniciar sesión
                            </button>
                        </form>

                        <form action="<?php echo FRONT_ROOT . "Auth/ShowRegister" ?>" method="post">
                            <button type="submit">
                                Registrarse
                            </button>
                        </form>
                    </div>
                </div>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
