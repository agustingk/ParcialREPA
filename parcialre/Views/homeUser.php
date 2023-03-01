<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home</title>
</head>
<body>
    <h1>
        Home User.
    </h1>

    <div>
        <a>
            <?php echo "Bienvenido " . $user->getNombre(). "!" ?>
        </a>
    </div>

    

    <div>
        <form action="<?php echo FRONT_ROOT . "User/VerShop" ?>" method="post">
            <button type="submit">Ver Shop</button></br>
        </form>
    </div>

    <div>
        <form action="<?php echo FRONT_ROOT . "RealEstate/AddRealEstate" ?>" method="post">
            <button type="submit">Agregar Real Estate</button></br>
        </form>
    </div>
    
    <div>
        <form action="<?php echo FRONT_ROOT . "Vehicle/AddVehicle" ?>" method="post">
            <button type="submit">Agregar Vehicle</button></br>
        </form>
    </div>

    <div>
        <form action="<?php echo FRONT_ROOT . "Auth/Logout" ?>" method="post">
            <button type="submit">Cerrar sesión</button></br>
    </div>

</body>
</html>