<?php

include 'shop.php';

$product1 = new Product('Ciotola', 'Strumenti', 'argento', 14.99, 9, false,'Cane');
$product2 = new Product('Bastoncini di Pesce', 'Cibo', '', 6.99, 4, true,'Gatto');
$product3 = new Product('guinzaglio', 'Strumenti', 'blu', 20.00, 9, false,'Cane');
$product4 = new Product('trasportino', 'Cuccie', 'Grigia', 29.99, 6, false,'Gatto');
$product1->setLinkImage('./img/ciotola.jpg');
$product2->setLinkImage('./img/bastoncini.jpg');
$product3->setLinkImage('./img/guinzaglio.jpeg');
$product4->setLinkImage('./img/trasportino.jpg');

$list_product=[
    $product1,
    $product2,
    $product3,
    $product4

];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">SHOP PRODOTTI PER ANIMALI</h1>
        <div class="row">
            <?php foreach ($list_product as $product){?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header text-center">
                            <?php echo $product->getCategory()?>
                        </div>
                        <img src="<?php echo $product->getLinkImage()?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName()?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item <?php echo $product->getPriceRange()?> ">Prezzo:  <?php echo $product->getPrice()?>€</li>
                            <li class="list-group-item">Ecosostenibile:  <?php echo $product->getEcoFriendlyCheck()?> <p></p></li>
                            <li class="list-group-item">Votazione:  <?php echo $product->getVote()?> <p></p></li>
                            <li class="list-group-item">Colore:  <?php echo $product->getColor()?> <p></p></li>
                            
                        </ul>
                        
                    </div>
                </div>
            <?php }?>

        </div>


    </div>

    
</body>
</html>