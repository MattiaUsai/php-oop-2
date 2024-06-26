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