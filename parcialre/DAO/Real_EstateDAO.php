<?php
    namespace DAO;

    use DAO\IReal_EstateDAO as IReal_EstateDAO;
    use Models\Real_Estate as Real_Estate;

    class Real_EstateDAO implements IReal_EstateDAO
    {
        private $Real_EstateList = array();
        private $fileName = ROOT."Data/real_estates.json";

        public function Add(Real_Estate $real_state)
        {
            $this->RetrieveData();
            
            $real_state->setId($this->GetNextId());
            
            array_push($this->Real_EstateList, $real_state);

            $this->SaveData();

            return $real_state;
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->Real_EstateList;
        }

        public function Remove($id)
        {            
            $this->RetrieveData();
            
            $this->Real_EstateList = array_filter($this->Real_EstateList, function($real_state) use($id){                
                return $real_state->getId() != $id;
            });
            
            $this->SaveData();
        }

        public function Contains($title)
        {            
            $this->RetrieveData();

            $userFiltered = array_filter($this->Real_EstateList, function ($real_state) use ($title) {

                return $real_state->getEmail() == $real_state;
            });

            $userFiltered = array_values($userFiltered); //Reordenar

            if (count($userFiltered) > 0) {
                return $userFiltered[0];
            } else {
                return null;
            }
        }

        private function RetrieveData()
        {
            $this->Real_EstateList = array();

            if (file_exists($this->fileName)) {
                $jsonToDecode = file_get_contents($this->fileName);
                
                $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();

                foreach ($contentArray as $content) {

                    $real_state = new Real_Estate();
                    $real_state->setId($content["id"]);
                    $real_state->setUser($content["user"]);
                    $real_state->setTitle($content["title"]);
                    $real_state->setDescription($content["description"]);
                    $real_state->setBedrooms($content["bedrooms"]);
                    $real_state->setParking($content["parking"]);
                    $real_state->setPrice($content["price"]);
                    $real_state->setCity($content["city"]);
    
                    array_push($this->Real_EstateList, $real_state);
                }
            }
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->Real_EstateList as $real_state)
            {
                $valuesArray = array();
                $valuesArray["id"] = $real_state->getId();
                $valuesArray["user"] = $real_state->getUser();
                $valuesArray["title"] = $real_state->getTitle();
                $valuesArray["description"] = $real_state->getDescription();
                $valuesArray["bedrooms"] = $real_state->getBedrooms();
                $valuesArray["parking"] = $real_state->getParking();
                $valuesArray["price"] = $real_state->getPrice();
                $valuesArray["city"] = $real_state->getCity();
                
                array_push($arrayToEncode, $valuesArray);
            }

            $fileContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $fileContent);
        }

        private function GetNextId()
        {
            $id = 0;

            foreach($this->Real_EstateList as $real_state)
            {
                $id = ($real_state->getId() > $id) ? $real_state->getId() : $id;
            }

            return $id + 1;
        }

        function getByEmail($user)
        {

            $this->RetrieveData();

            $real_states = array_filter($this->Real_EstateList, function ($real_state) use ($user) {
                return $real_state->getUser() == $user;
            });

            $real_states = array_values($this->Real_EstateList);

            if (count($real_states) > 0) {
                return $real_states[0];
            } else {
                return null;
            }
        }
    }
?>