<?php

class Product  {
    private string $name = '';
    private string $type = '';
    private string $color = '';
    private float $price = 0 ;
    private int $vote = 0;
    private bool $eco_friendly = false;
    private string $category = '';
    private string $link_image = '';

    public function __construct($name,$type,$color,$price,$vote,$eco_friendly,$category)
    {
        $this->name = $name;
        $this->type = $type;
        $this->color = $color;
        $this->price = $price;
        $this->vote = $vote;
        $this->eco_friendly = $eco_friendly;
        $this->category = $category;
    }
    public function getName(): string
        {
            return $this->name;
        }

    public function setName(string $name): void
        {
            $this->name = $name;
        }



    public function geType(): string
        {
            return $this->type;
        }

    public function setType(string $type): void
        {
            $this->type = $type;
        }



    public function getColor(): string
        {
            return $this->color;
        }

    public function setColor(string $color): void
        {
            $this->color = $color;
        }


    public function getVote(): int
        {
            return $this->vote;
        }

    public function setVote(int $vote): void
        {
            $this->vote = $vote;
        }
    public function getPrice(): float
        {
            return $this->price;
        }

    public function setPrice(float $price): void
        {
            $this->price = $price;
        }


    public function getEcoFriendly(): int
        {

            return $this->eco_friendly;
        }

    public function setEcoFriendly(int $eco_friendly): void
        {
            $this->eco_friendly = $eco_friendly;
        }
    
//LEGGI CATEGORIA
    public function getCategory(): string
        {
            return $this->category;
        }

    public function setCategory(string $category): void
        {
            $this->category = $category;
        }
     public function getLinkImage(): string
        {
            return $this->link_image;
        }

    public function setLinkImage(string $link_image): void
        {
            $this->link_image = $link_image;
        }
    public function getEcoFriendlyCheck(): string
        {
            if($this->eco_friendly===true){
                return '&check;';
            }else{
                return '&cross;';

            }
            
        }

}






$product1 = new Product('Ciotola', 'Strumenti', 'argento', 14.99, 9, false,'Cane');
$product2 = new Product('Bastoncini di Pesce', 'Cibo', '', 6.99, 4, true,'Gatto');
$product3 = new Product('guinzaglio', 'Strumenti', 'blu', 20.00, 9, false,'Cane');
$product4 = new Product('trasportino', 'Cuccie', 'Grigia', 29.99, 6, false,'Gatto');
$product1->setLinkImage('./ciotola.jpg');
$product2->setLinkImage('./bastoncini.jpg');
$product3->setLinkImage('./guinzaglio.jpeg');
$product4->setLinkImage('./trasportino.jpg');

$list_product=[
    $product1,$product2,$product3,$product4

];

var_dump($list_product);


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
        <div class="row">
            <?php foreach ($list_product as $product){?>
           <div class="card" style="width: 18rem;">
                <div class="card-header text-center">
                    <?php echo $product->getCategory()?>
                </div>
                <img src="<?php echo $product->getLinkImage()?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->getName()?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prezzo:  <?php echo $product->getPrice()?>€</li>
                    <li class="list-group-item">Ecosostenibile:  <?php echo $product->getEcoFriendlyCheck()?> <p></p></li>
                    <li class="list-group-item">Votazione:  <?php echo $product->getVote()?> <p></p></li>
                    <li class="list-group-item">Colore:  <?php echo $product->getColor()?> <p></p></li>
                    
                </ul>
                
            </div>
            <?php }?>

        </div>


    </div>

    
</body>
</html>