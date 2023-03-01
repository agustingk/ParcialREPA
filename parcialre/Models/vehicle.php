<?php
    namespace Models;
    class Vehicle{

        private $id;
        private $user;
        private $title;
        private $description;
        private $year;
        private $price;
        private $city;

      
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

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

        public function getYear()
        {
                return $this->year;
        }

        public function setYear($year)
        {
                $this->year = $year;

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
    }
?>