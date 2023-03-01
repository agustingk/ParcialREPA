<?php
    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    use DAO\VehicleDAO as VehicleDAO;
    use Models\Users as User;
    use Models\Vehicle as Vehicle;
    
    class VehicleController
    {
        function __construct()
        {
            require_once(ROOT . "/Utils/ValidateSession.php");
        }

        public function Add($title, $description, $year, $price, $city){

            $vehicle = new Vehicle();
    
            $vehicle->setUser($_SESSION["email"]);
            $vehicle->setTitle($title);
            $vehicle->setDescription($description);
            $vehicle->setYear($year);
            $vehicle->setPrice($price);
            $vehicle->setCity($city);
    
            $vehicleDAO = new VehicleDAO();
    
            $vehicleDAO->Add($vehicle);
            
            return header("location: " . FRONT_ROOT . "User/HomeUser");
        }
    
        public function AddVehicle(){
            require_once VIEWS_PATH . "add-new-vehicle.php";
        }
    }


?>