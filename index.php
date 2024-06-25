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
        <div class="contenitore ">
            <h2 class="text-success my-2 text-center">Prodotti per la casa</h2>
            <div class="d-flex">

                <?php foreach ($prodottiCasa as $prodotto) { ?>
                    <div class="my_card p-2 d-flex flex-column justify-content-between">
                        <div>
                            <img src="<?= $prodotto->immagine ?>" alt="">
                        </div>
                        <div class="descrizione">
                            <h4><?= $prodotto->nome ?></h4>
                            <p class="mb-0">Size: <?= ' ' . $prodotto->dimensioni . 'cm' ?></p>
                            <div class="d-flex justify-content-between">
                                <span>Prezzo:<?= " " . $prodotto->getPrice() ?></span>
                                <div class="cont_img"><img src="<?= $prodotto->categoria->getIcone() ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <h2 class="text-success my-2 text-center">Prodotti alimentari</h2>
            <div class="d-flex">

                <?php foreach ($prodottiAlimentari as $prodotto) { ?>
                    <div class="my_card p-2 d-flex flex-column justify-content-between">
                        <div>
                            <img src="<?= $prodotto->immagine ?>" alt="">
                        </div>
                        <div class="descrizione">
                            <h4><?= $prodotto->nome ?></h4>
                            <p class="mb-0">Peso:<?= $prodotto->getKg() ?></p>
                            <div class="d-flex justify-content-between">
                                <span>Prezzo:<?= " " . $prodotto->getPrice() ?></span>
                                <div class="cont_img"><img src="<?= $prodotto->categoria->getIcone() ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <h2 class="text-success my-2 text-center">Giochi per i tuoi Animali</h2>
            <div class="d-flex">

                <?php foreach ($giochi as $prodotto) { ?>
                    <div class="my_card p-2 d-flex flex-column justify-content-between">
                        <div>
                            <img src="<?= $prodotto->immagine ?>" alt="">
                        </div>
                        <div class="descrizione">
                            <h4><?= $prodotto->nome ?></h4>
                            <p class="mb-0">Materiale:<?= ' ' . $prodotto->materiale ?></p>
                            <div class="d-flex justify-content-between">
                                <span>Prezzo:<?= " " . $prodotto->getPrice() ?></span>
                                <div class="cont_img"><img src="<?= $prodotto->categoria->getIcone() ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

        <h2 class="text-success my-2 text-center">Tutti i prodotti</h2>
        <div class="d-flex flex-wrap">

            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="my_card p-2 d-flex flex-column justify-content-between">
                    <div>
                        <img src="<?= $prodotto->immagine ?>" alt="">
                    </div>
                    <div class="descrizione">
                        <h4><?= $prodotto->nome ?></h4>
                        <?php if (get_class($prodotto) == 'Cibo') { ?>
                            <p class="mb-0"><b>Peso:</b><?= $prodotto->getKg() ?></p>
                        <?php } elseif (get_class($prodotto) == 'Casa') { ?>
                            <p class="mb-0"><b>Size:</b> <?= ' ' . $prodotto->dimensioni . 'cm' ?></p>
                        <?php } elseif (get_class($prodotto) == 'Gioco') { ?>
                            <p class="mb-0"><b>Materiale:</b><?= ' ' . $prodotto->materiale ?></p>
                        <?php } ?>
                        <div class="d-flex justify-content-between">
                            <span><b>Prezzo:</b><?= " " . $prodotto->getPrice() ?></span>
                            <div class="cont_img"><img src="<?= $prodotto->categoria->getIcone() ?>" alt=""></div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </main>

    <footer></footer>

</body>

</html>