<?php
    namespace DAO;

    use DAO\IUserDAO as IUserDAO;
    use Models\User as User;

    class UserDAO implements IUserDAO
    {
        private $UserList = array();
        private $fileName = ROOT."Data/users.json";

        public function Add(User $user)
        {
            $this->RetrieveData();
            
            $user->setId($this->GetNextId());
            
            array_push($this->UserList, $user);

            $this->SaveData();

            return $user;
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->UserList;
        }

        public function Remove($id)
        {            
            $this->RetrieveData();
            
            $this->UserList = array_filter($this->UserList, function($User) use($id){                
                return $User->getId() != $id;
            });
            
            $this->SaveData();
        }

        public function Contains($email)
        {            
            $this->RetrieveData();

            $userFiltered = array_filter($this->UserList, function ($user) use ($email) {

                return $user->getEmail() == $email;
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
            $this->UserList = array();

            if (file_exists($this->fileName)) {
                $jsonToDecode = file_get_contents($this->fileName);
                
                $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();

                foreach ($contentArray as $content) {

                    $user = new User();
                    $user->setNombre($content["nombre"]);
                    $user->setEmail($content["email"]);
                    $user->setPassword($content["password"]);
                    $user->setId($content["id"]);

                    array_push($this->UserList, $user);
                }
            }
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->UserList as $user)
            {
                $valuesArray = array();
                $valuesArray["id"] = $user->getId();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["password"] = $user->getPassword();
                $valuesArray["nombre"] = $user->getNombre();
                array_push($arrayToEncode, $valuesArray);
            }

            $fileContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $fileContent);
        }

        private function GetNextId()
        {
            $id = 0;

            foreach($this->UserList as $user)
            {
                $id = ($user->getId() > $id) ? $user->getId() : $id;
            }

            return $id + 1;
        }

        function getByEmail($email)
        {

            $this->RetrieveData();

            $users = array_filter($this->UserList, function ($user) use ($email) {
                return $user->getEmail() == $email;
            });

            $users = array_values($this->UserList);

            if (count($users) > 0) {
                return $users[0];
            } else {
                return null;
            }
        }
    }
?>