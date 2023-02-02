<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <?php
    class Products {
        private $name ;
        private $description;
        private $price;
        private $srp;


        function setName($name) {
            $this->name = $name;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setPrice($price) {
            $this->price = $price;
        }

        function getName() {
            return $this->name;
        }
        function getDescription() {
            return $this->description;
        }
        function getPrice() {
            return $this->price;
        }

        function calcuSrp() {
            return $this->price * 1.5;
        }
    }

    ?>
</body>
</html>