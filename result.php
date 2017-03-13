<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;

        function __construct($car_make_model, $car_price, $car_miles)
        {
            $this->make_model = $car_make_model;
            $this->price = $car_price;
            $this->miles = $car_miles;
        }
        function setMakeModel($new_make_model)
        {
          $this->make_model = $new_make_model;
        }

        function getMakeModel()
        {
          return $this->make_model;
        }

        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price != 0) {
              $formatted_price = number_format($float_price, 2);
              $this->price = $formatted_price;
            }
        }

        function getPrice()
        {
            return $this->price;
        }

        function setMiles($new_miles)
        {
            $this->miles = $new_miles;
        }

        function getMiles()
        {
            return $this->miles;
        }

    }

    $first_car = new Car("2014 Porshe 911", "114220", "7622");
    $second_car = new Car("2011 Ford F350", "12333", "44223");
    $third_car = new Car("2013 Lexus RX 350", "44700", "20000");
    $fourth_car = new Car("Mercedes Benz CLS550", "39900", "37989");
    $first_car->setMakeModel("2003 Kia Sportage");
    $third_car->setPrice("10023.032456");
    $second_car->setMiles("123.734");

    $cars = array($first_car, $second_car, $third_car, $fourth_car);

    $cars_matching_search = array();
      foreach ($cars as $car) {
        if ($car->getPrice() < $_GET["priceInput"]) {
          array_push($cars_matching_search, $car);
        }
      }


 ?>

<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
  <link href="css/styles.css" type="text/css" rel="stylesheet">
  <title>Car Dealer: Search Result</title>
</head>
  <body>
    <div classs="container">
      <h1>Here's what we have that meets your requirements:</h1>
      <ul>
        <?php
            foreach ($cars_matching_search as $car) {
              $miles = $car->getMiles();
              $price = $car->getPrice();
              $make_model = $car->getMakeModel();
              echo "<li> $make_model </li>";
              echo "<ul>";
                  echo "<li> Price: $price </li>";
                  echo "<li> Miles: $miles </li>";
              echo "</ul>";
            }
        ?>
      </ul>
    </div>
  </body>
</html>
