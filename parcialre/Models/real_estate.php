<?php
    namespace Models;
    class real_estate{

        private $id;
        private $user;
        private $title;
        private $description;
        private $bedrooms;
        private $parking;
        private $price;
        private $city;

        public function getUser()
        {
                return $this->user;
        }

        public function setUser($user)
        {
                $this->user = $user;

                return $this;
        }

        public function getTitle()
        {
                return $this->title;
        }

        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        public function getDescription()
        {
                return $this->description;
        }

        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        public function getBedrooms()
        {
                return $this->bedrooms;
        }

        public function setBedrooms($bedrooms)
        {
                $this->bedrooms = $bedrooms;

                return $this;
        }

        public function getParking()
        {
                return $this->parking;
        }

        public function setParking($parking)
        {
                $this->parking = $parking;

                return $this;
        }

        public function getPrice()
        {
                return $this->price;
        }

        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        public function getCity()
        {
                return $this->city;
        }

        public function setCity($city)
        {
                $this->city = $city;

                return $this;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }
?>