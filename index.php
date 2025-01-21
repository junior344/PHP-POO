<?php
    // require_once('./weather/beverage.php');
    // require_once('./weather/beer.php');
    // require_once('./projet/panier.php');
    require_once('./Website/Articles.php');
    require_once('./Website/Ads.php');
    require_once('./Website/vacancies.php');
    require_once('./GroupeEtudiant/etudiants.php');
    

    use beverage as beverage;


    // $market = new panier(6,3, 2,true) ;
    // $meteo = new beverage('red', 2.5, 'hot');
    $article = new Article('marvel','yo');
    $ads = new Ads('thor','mo');
    $vacant = new vacancies('spider','you');

    echo'article '.$article->afficheTitre().'<br>';
    echo 'ads '.$ads->afficheTitre().'<br>';
    echo 'vacant '.$vacant->afficheTitre().'<br>';

    var_dump($market->priceTotal());
?>




