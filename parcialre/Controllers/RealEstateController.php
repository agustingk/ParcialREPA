<?php
    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    use DAO\Real_EstateDAO as Real_EstateDAO;
    use Models\Users as User;
    use Models\real_estate as real_estate;
    
    class RealEstateController
    {
        function __construct()
        {
            require_once(ROOT . "/Utils/ValidateSession.php");
        }

        public function Add($title, $description, $bedrooms, $parking, $price, $city){

            $real_estate = new real_estate();
    
            $real_estate->setUser($_SESSION["email"]);
            $real_estate->setTitle($title);
            $real_estate->setDescription($description);
            $real_estate->setBedrooms($bedrooms);
            if($parking){
                if($parking==1){
                    $parking="Yes";
                }
                else{
                    $parking="No";
                }
            }
            $real_estate->setParking($parking);
            $real_estate->setPrice($price);
            $real_estate->setCity($city);
            
    
            $real_estateDAO = new real_estateDAO();
    
            $real_estateDAO->Add($real_estate);
            
            return header("location: " . FRONT_ROOT . "User/HomeUser");
        }
    
        public function AddRealEstate(){
            require_once VIEWS_PATH . "add-new-real-estate.php";
        }
    }


?>