<?php

include __DIR__ . "/models/Casa.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Gioco.php";




$prodottiCasa = [

    new Casa(new Prodotto('Cuccia da giardino', 120, './img/cucce-per-cani-1.jpg', new Categoria('cane')), 100, 100),
    new Casa(new Prodotto('Cuccia da giardino', 120, './img/cuccia-gatti.webp', new Categoria('gatto')), 100, 100)

];

$prodottiAlimentari = [

    new Cibo(7, new Prodotto('Felix', 25, './img/felix.jpg', new Categoria('gatto'))),
    new Cibo(15, new Prodotto('Royal Canin', 50, './img/royalpng.png', new Categoria('cane'))),

];

$giochi = [

    new Gioco('Plastica', new Prodotto('Frisbee', 12, './img/frisbee.jpg', new Categoria('cane'))),
    new Gioco('Legno', new Prodotto('Mouse', 10, './img/topolino-gatto.jpg', new Categoria('gatto'))),

];
