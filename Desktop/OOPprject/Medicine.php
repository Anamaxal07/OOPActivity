<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine</title>
</head>
<body>

<?php
    require_once "products.php";

    class Medicine extends products {
        private $dose;
        private $type;
        private $expirationDate;

        function setDose($dose) {
            $this->dose = $dose;
        }

        function setType($type) {
            $this->type = $type;
        }

        function setExpirationDate($expirationDate) {
            $this->expirationDate = $expirationDate;
        }

        function getDose() {
            return $this->dose;
        }
        
	    function getType(){
            return $this->type;
        }

	    function getExpirationDate(){
            return $this->expirationDate;
        }
        function computeSRP() {
            return $this->getPrice() * 2;
        }
    }
    ?>
</body>
</html>