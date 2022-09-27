<?php

include __DIR__ . "/db.php";


$sum = 0;
foreach($chart as $key=>$value){
    if(isset($value->prodPrice))
       $sum += $value->prodPrice;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<style>
    body {
      background: #000;
      color: #fff;
      font-size: 2rem;
      line-height: 3rem;
      font-family: sans-serif;
    }
    li {
      margin: 50px 0;
    }
</style>
<body>
    
    <h2>Il tuo carrello:</h2>
    <ul>
        <?php foreach($chart as $value){
        ?>
            <li> 
                <h4> <?= $value->prodName ?> </h4>
                <span> <?= $value->brand ?> </span>
                <strong> <?= $value->prodPrice?>€</strong>  
            </li>
        <?php
        }
        ?>
    </ul>

    <h4>Spesa totale: <?= $sum ?>€</h4>

</body>
</html>