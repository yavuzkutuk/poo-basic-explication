<?php

class Cat{
   
    // Caractérisques <=> Propriétés <=> Attributés <=> Variables
    private $name;
    private $color;
    private $age;

    // Comportements <=> Méthodes <=> Fonctions
    public function __construct(string $name, string $color, int $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $newAge): void
    {
        $this->age = $newAge;
    }

    public function present()
    {
        return 'Mon chat s\'apelle '.$this->name.' et il a les yeux '.$this->color.' et il a '.$this->age.' ans<br/>';
    }

    public function walk(){
        return $this->name. ' est épuisé<br/>';
    }
    
}