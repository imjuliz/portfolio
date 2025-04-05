<?php

// arquivo .txt com dados dos projetos
$arquivo = file("projetos.txt");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Julia Alves</title>
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../pages/projetos.php">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <script src="../js/carousel.js"></script>

</head>

<body>
    <section class="section-ban">
        <?php require_once '../pages/navbar.php'; ?>

        <main>
            <div class="banner-container">
                <div class="box-banner">
                    <p class="banner-p1">Seja bem-vindo ao meu</p>
                    <p class="title-box">Portfólio</p>
                    <p class="text-box">Aqui você encontrará uma coleção dos meus projetos mais recentes, nos quais fui responsável principalmente pelo desenvolvimento front-end.</p>
                </div>
                <div class="box-banner2">
                    <img src="../img/img-banner.svg" class="banner-img">
                </div>
            </div>
    </section>

    <div class="container-projetos">
        <?php
        foreach ($arquivo as $linha) {

            // dividindo os valores do array em variaveis individuais 
            list($data, $nome, $img1, $img2, $img3, $img4, $img5, $descricao, $repositorio) = explode('|', trim($linha));

            // gera um id unico p cada carrossel
            $carrosselId = uniqid('carrossel_');

            print '
    <section class="projeto">
        <p class="data-proj">' . $data . ' </p>
        <p class="name-proj">' . $nome . ' </p>
        <div id="' . $carrosselId . '" class="carousel" data-current-index="0">
            <button class="carousel-btn prev" onclick="moveCarousel(-1, \'' . $carrosselId . '\')"><img src="../img/seta-esquerda.svg" class="img-btn-c"></button>
            <div class="carousel-container1">
            <div class="carousel-container">
                <img src="../img/' . $img1 . '" class="img-proj">
                <img src="../img/' . $img2 . '" class="img-proj">
                <img src="../img/' . $img3 . '" class="img-proj">
                <img src="../img/' . $img4 . '" class="img-proj">
                <img src="../img/' . $img5 . '" class="img-proj">
            </div>
            </div>
           <button class="carousel-btn next" onclick="moveCarousel(1, \'' . $carrosselId . '\')"><img src="../img/seta-direita.svg" class="img-btn-c"></button>
        </div>
        <p class="desc-proj">' . $descricao . ' </p>

        <div class="btns-proj">
        <a href="' . $repositorio . '" target="_blank">
        <button class="btn-amarelo">Acessar repositório</button>
        </a>
        </div>

    </section>
    ';
        }
        ?>
    </div>
    </main>
</body>

<?php require_once './footer.php'; ?>

</html>