<?php
    class Car
    {
      public $make_model;
      public $price;
      public $miles;
    }

    $porshe = new Car ();
    $porshe->make_model = "2014 Porshe 911";
    $porshe->price = "114220";
    $porshe->miles = "7622";

    $ford = new Car ();
    $ford->make_model = "2011 Ford F350";
    $ford->price = "55955";
    $ford->miles = "44223";

    $lexus = new Car ();
    $lexus->make_model = "2013 Lexus RX 350";
    $lexus->price = "44700";
    $lexus->miles = "20000";

    $mercedes = new Car ();
    $mercedes->make_model = "Mercedes Benz CLS550";
    $mercedes->price = "39900";
    $mercedes->miles = "37989";

    $cars = array($porshe, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
      foreach ($cars as $car) {
        if ($car->price < $_GET["priceInput"]) {
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
              echo "<li> $car->make_model </li>";
              echo "<ul>";
                  echo "<li> Price: $car->price </li>";
                  echo "<li> Miles: $car->miles </li>";
              echo "</ul>";
            }
        ?>
      </ul>
    </div>
  </body>
</html>
