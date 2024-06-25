<?php
include __DIR__ . "/store.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>E-commerce Animali</title>
</head>

<body>

    <header>
        <div class="d-flex nav_bar">

            <div style="width: 20%;">
                <img style="height: 100%;" src="./img/logo.avif" alt="">
            </div>

        </div>
    </header>

    <main>
        <div class="contenitore text-center">
            <h2 class="text-success">Prodotti per la casa</h2>
            <div class="d-flex">

                <?php foreach ($prodottiCasa as $prodotto) { ?>
                    <div class="my_card p-2">
                        <img src="<?= $prodotto->prodotto->immagine ?>" alt="">
                        <div class="descrizione">
                            <h4><?= $prodotto->prodotto->nome ?></h4>
                            <p class="mb-0">Size: Larg: <?= " " . $prodotto->getLarghezza() ?>, Lung:<?= " " . $prodotto->getLunghezza() ?></p>
                            <div class="d-flex justify-content-between">
                                <span>Prezzo:<?= " " . $prodotto->prodotto->getPrice() ?></span>
                                <div class="cont_img"><img src="<?= $prodotto->prodotto->categoria->getIcone() ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <h2 class="text-success">Prodotti alimentari</h2>
            <div class="d-flex">

                <?php foreach ($prodottiAlimentari as $prodotto) { ?>
                    <div class="my_card p-2">
                        <img src="<?= $prodotto->prodotto->immagine ?>" alt="">
                        <div class="descrizione">
                            <h4><?= $prodotto->prodotto->nome ?></h4>
                            <p class="mb-0">Peso:<?= $prodotto->getKg() ?></p>
                            <div class="d-flex justify-content-between">
                                <span>Prezzo:<?= " " . $prodotto->prodotto->getPrice() ?></span>
                                <div class="cont_img"><img src="<?= $prodotto->prodotto->categoria->getIcone() ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <h2 class="text-success">Giochi per i tuoi Animali</h2>
            <div class="d-flex">

                <?php foreach ($giochi as $prodotto) { ?>
                    <div class="my_card p-2">
                        <img src="<?= $prodotto->prodotto->immagine ?>" alt="">
                        <div class="descrizione">
                            <h4><?= $prodotto->prodotto->nome ?></h4>
                            <p class="mb-0">Materiale:<?= ' ' . $prodotto->materiale ?></p>
                            <div class="d-flex justify-content-between">
                                <span>Prezzo:<?= " " . $prodotto->prodotto->getPrice() ?></span>
                                <div class="cont_img"><img src="<?= $prodotto->prodotto->categoria->getIcone() ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </main>

    <footer></footer>

</body>

</html>