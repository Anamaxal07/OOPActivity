<?php
    require_once "products.php";

    class Medicine extends products{
        private $dose;
        private $type;
        private $expirationDate;
        
        function setDose($dose){
            $this->dose = $dose;
        }

        function setType($type){
            $this->type = $type;
        }

        function setExpirationDate($expirationDate){
            $this->expirationDate = $expirationDate;
        }

        function getType(){
            return $this->type;
         }

        function getDose(){
           return $this->dose;
        }

        function getExpirationDate(){
            return $this->expirationDate;
        }

        function computeSRP(){
           return $this->getPrice() * 2;
        }

        
    }




?>