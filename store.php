<?php

include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Casa.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Gioco.php";




$prodottiCasa = [

    new Casa('Cuccia da giardino', 120, './img/cucce-per-cani-1.jpg', new Categoria('cane'), '102X45X300'),
    new Casa('Cuccia da giardino', 120, './img/cuccia-gatti.webp', new Categoria('gatto'), '55X35X75'),
    new Casa('Cuccia da casa', 120, './img/cuccia-letto-cane.jpeg', new Categoria('cane'), '102X45X300'),
    new Casa('Cuccia da casa', 120, './img/cuccia-letto-gatto.jpg', new Categoria('gatto'), '55X35X75'),

];

$prodottiAlimentari = [

    new Cibo(7, 'Felix', 25, './img/felix.jpg', new Categoria('gatto')),
    new Cibo(15, 'Royal Canin', 50, './img/cani-royal.jpg', new Categoria('cane')),
    new Cibo(8, 'Royal Canin', 30, './img/royal-for-cat.jpg', new Categoria('gatto')),
    new Cibo(10, 'Royal Canin', 50, './img/crocchete-per-cani.jpg', new Categoria('cane')),

];

$giochi = [

    new Gioco('Plastica', 'Frisbee', 12, './img/frisbee.jpg', new Categoria('cane')),
    new Gioco('Legno', 'Mouse', 10, './img/topolino-gatto.jpg', new Categoria('gatto')),
    new Gioco('Gomma', 'Mouse', 15, './img/ventosa.webp', new Categoria('cane')),
    new Gioco('Legno', 'Mouse', 8, './img/pallina-gatto.jpeg', new Categoria('gatto')),

];

$prodotti = [
    new Casa('Cuccia da giardino', 120, './img/cucce-per-cani-1.jpg', new Categoria('cane'), '102X45X300'),
    new Casa('Cuccia da giardino', 120, './img/cuccia-gatti.webp', new Categoria('gatto'), '55X35X75'),
    new Casa('Cuccia da casa', 120, './img/cuccia-letto-cane.jpeg', new Categoria('cane'), '102X45X300'),
    new Casa('Cuccia da casa', 120, './img/cuccia-letto-gatto.jpg', new Categoria('gatto'), '55X35X75'),
    new Cibo(7, 'Felix', 25, './img/felix.jpg', new Categoria('gatto')),
    new Cibo(15, 'Royal Canin', 50, './img/cani-royal.jpg', new Categoria('cane')),
    new Cibo(8, 'Royal Canin', 30, './img/royal-for-cat.jpg', new Categoria('gatto')),
    new Cibo(10, 'Royal Canin', 50, './img/crocchete-per-cani.jpg', new Categoria('cane')),
    new Gioco('Plastica', 'Frisbee', 12, './img/frisbee.jpg', new Categoria('cane')),
    new Gioco('Legno', 'Mouse', 10, './img/topolino-gatto.jpg', new Categoria('gatto')),
    new Gioco('Gomma', 'Corda con ventosa', 15, './img/ventosa.webp', new Categoria('cane')),
    new Gioco('Legno', 'Pallina', 8, './img/pallina-gatto.jpeg', new Categoria('gatto')),
];
