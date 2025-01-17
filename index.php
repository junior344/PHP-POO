<?php
    require_once('./weather/beverage.php');
    require_once('./weather/beer.php');

    use beverage as beverage;


    $newBeer = new beer('fanta', 0.5,'orange',04, 'cold');

    var_dump($newBeer->getInfo()); 
?>



