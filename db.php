<?php

include __DIR__ . "/classes/User.php";
include __DIR__ . "/classes/Cibo.php";
include __DIR__ . "/classes/Giocattolo.php";
include __DIR__ . "/classes/Accessorio.php";



$users = [
    new User("Nobody", "Joe", "jnob@gmail", 2077),
    new User("Jesus", "Alvarez", "jesoo@gmail",2043),
    new User("Mango", "Bango", "mango@gmail",2050 ),
    new User("Bobo", "Vieri", "bobo@gmail", 2030),
    
];

$products = [
   
    new Cibo("Cibo per cani al riso", 151, 13.29, "Cibo per animali","Yummers", "Crocchette di riso", 15),
    
    new Giocattolo("Gioco letale per mastini", 482, 69.29, "Giochi per animali", "Lethal200", "Morte da masticare", "Letale"),

    new Accessorio("Collare per dinosauri", 897, 12.59, "Accessori per animali", "Dinoboy3000", "Collare per cani", "pelle", "nero"),

];

$chart = [
    new Cibo("Cibo per cani al riso", 151, 13.29, "Cibo per animali","Yummers", "Crocchette di riso", 15),
    new Giocattolo("Gioco letale per mastini", 482, 69.29, "Giochi per animali", "Lethal200", "Morte da masticare", "Letale"),
    new Accessorio("Collare per dinosauri", 897, 12.59, "Accessori per animali", "Dinoboy3000", "Collare per cani", "pelle", "nero"),
];