<?php
    namespace DAO;

    use Models\Vehicle as vehicle;

    interface IVehicleDAO{
        function Add(vehicle $vehicle);
        function GetAll();
        function remove($id);
    }
?>