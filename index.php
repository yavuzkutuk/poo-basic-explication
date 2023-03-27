<?php

// import class Cat
require('Cat.php');

// Initialisation
$garfield = new Cat("Garfield", "marrons", 5);
//echo $garfield->present();
$garfield->setAge(15);

// 15 ans apres .....
echo '15 ans apres il à '.$garfield->getAge().' ans<br/>';


$felix = new Cat("Felix", "vert", 1);
//echo $felix->present();

//echo $garfield->walk();
