<?php
    namespace DAO;

    use DAO\IVehicleDAO as IVehicleDAO;
    use Models\Vehicle as vehicle;

    class VehicleDAO implements IVehicleDAO
    {
        private $VehiclesList = array();
        private $fileName = ROOT."Data/vehicles.json";

        public function Add(vehicle $vehicle)
        {
            $this->RetrieveData();
            
            $vehicle->setId($this->GetNextId());
            
            array_push($this->VehiclesList, $vehicle);

            $this->SaveData();

            return $vehicle;
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->VehiclesList;
        }

        public function Remove($id)
        {            
            $this->RetrieveData();
            
            $this->VehiclesList = array_filter($this->VehiclesList, function($vehicle) use($id){                
                return $vehicle->getId() != $id;
            });
            
            $this->SaveData();
        }

        public function Contains($title)
        {            
            $this->RetrieveData();

            $userFiltered = array_filter($this->VehiclesList, function ($vehicle) use ($title) {

                return $vehicle->getTitle() == $title;
            });

            $userFiltered = array_values($userFiltered);

            if (count($userFiltered) > 0) {
                return $userFiltered[0];
            } else {
                return null;
            }
        }

        private function RetrieveData()
        {
            $this->VehiclesList = array();

            if (file_exists($this->fileName)) {
                $jsonToDecode = file_get_contents($this->fileName);
                
                $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();

                foreach ($contentArray as $content) {

                    $vehicle = new vehicle();
                    $vehicle->setId($content["id"]);
                    $vehicle->setUser($content["user"]);
                    $vehicle->setTitle($content["title"]);
                    $vehicle->setDescription($content["description"]);
                    $vehicle->setYear($content["year"]);
                    $vehicle->setPrice($content["price"]);
                    $vehicle->setCity($content["city"]);
                  
    
                    array_push($this->VehiclesList, $vehicle);
                }
            }
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->VehiclesList as $vehicle)
            {
                $valuesArray = array();
                $valuesArray["id"] = $vehicle->getId();
                $valuesArray["user"] = $vehicle->getUser();
                $valuesArray["title"] = $vehicle->getTitle();
                $valuesArray["description"] = $vehicle->getDescription();
                $valuesArray["year"] = $vehicle->getYear();
                $valuesArray["price"] = $vehicle->getPrice();
                $valuesArray["city"] = $vehicle->getCity();
                
                array_push($arrayToEncode, $valuesArray);
            }

            $fileContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $fileContent);
        }

        private function GetNextId()
        {
            $id = 0;

            foreach($this->VehiclesList as $vehicle)
            {
                $id = ($vehicle->getId() > $id) ? $vehicle->getId() : $id;
            }

            return $id + 1;
        }

        function getByEmail($user)
        {

            $this->RetrieveData();

            $vehicle = array_filter($this->VehiclesList, function ($vehicle) use ($user) {
                return $vehicle->getUser() == $user;
            });

            $vehicles = array_values($this->VehiclesList);

            if (count($vehicles) > 0) {
                return $vehicles[0];
            } else {
                return null;
            }
        }
    }
?>