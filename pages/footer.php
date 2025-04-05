<?php
$navegacao = [
    [
        'nome' => 'Página Inicial',
        'link' => 'index.php'
    ],
    [
        'nome' => 'Portfólio',
        'link' => 'portfolio.php'
    ]
];


$redes = [
    [
        'icon' => 'insta.svg',
        'link' => 'https://www.instagram.com/'
    ],
    [
        'icon' => 'github.svg',
        'link' => 'https://github.com/imjuliz'
    ],
    [
        'icon' => 'linkedin.svg',
        'link' => 'https://www.linkedin.com/in/juliaoliveiraec/'
    ]
];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        /* fonte */
        @font-face {
            font-family: 'Urbanist Medium';
            src: url('../font/Urbanist-Medium.ttf');
        }

        @font-face {
            font-family: 'Urbanist SemiBold';
            src: url('../font/Urbanist-SemiBold.ttf');
        }

        @font-face {
            font-family: 'Urbanist Bold';
            src: url('../font/Urbanist-Bold.ttf');
        }

        footer {
            width: 100%;
            height: max-content;
            background-color: #171717;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
        }

        a {
            list-style: none;
        }

        .container-footer {
            display: flex;
            justify-content: space-around;
            width: 90%;
            margin: 10vh 0 6vh 0;
        }

        .titles-footer {
            color: #fff;
            font-family: 'Urbanist Bold';
            font-size: 20px;
            margin-top: 0;
        }

        .itens-f {
            color: #4B5563;
            font-size: 16px;
            font-family: 'Urbanist Medium';
            width: fit-content;
        }

        .itens-f:hover {
            color: #E3E3E3;
        }

        .itens-f-a {
            text-decoration: none;
            width: fit-content;
            display: list-item;
        }

        .linha-img {
            width: 90%;
            margin-bottom: 4vh;
        }

        .copyright {
            color: #cecece;
            font-size: 14px;
            font-family: 'Urbanist Medium';
            text-align: center;
            margin-bottom: 5vh;
        }

        /* caixa de enviar mensagem por e-mail */
        .messageBox {
            width: fit-content;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #2d2d2d;
            padding: 0 15px;
            border-radius: 10px;
            border: 1px solid rgb(63, 63, 63);
        }

        .messageBox:focus-within {
            border: 1px solid rgb(110, 110, 110);
        }

        #messageInput {
            width: 200px;
            height: 100%;
            background-color: transparent;
            outline: none;
            border: none;
            padding-left: 10px;
            color: white;
        }

        #messageInput:focus~#sendButton svg path,
        #messageInput:valid~#sendButton svg path {
            fill: #3c3c3c;
            stroke: white;
        }

        #sendButton {
            width: fit-content;
            height: 100%;
            background-color: transparent;
            outline: none;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        #sendButton svg {
            height: 18px;
            transition: all 0.3s;
        }

        #sendButton svg path {
            transition: all 0.3s;
        }

        #sendButton:hover svg path {
            fill: #3c3c3c;
            stroke: white;
        }

        .box-conexoes {
            display: flex;
            justify-content: space-between;
            width: 50%;
        }

        .img-social:hover {
            filter: brightness(2.5);
        }

        .box-footer1 {
            width: 16%;
        }

        .img-social {
            height: 30px;
        }

        .wpp {
            display: flex;
            justify-content: space-between;
            width: 52%;
            font-size: 16px;
            font-family: 'Urbanist Medium';
        }

        .wpp a{
            color: #4B5563;

        }

        .wpp p:hover {
            color: #E3E3E3;
        }
    </style>
</head>

<body>
</body>

<footer>
    <section class="container-footer">
        <div class="box-footer">
            <p class="titles-footer">Navegar</p>
            <?php
            foreach ($navegacao as $navegar) {
                echo '
            <a href="' . $navegar['link'] . '" class="itens-f-a">
            <p class="itens-f">' . $navegar['nome'] . '</p>
            </a>
    ';
            }
            ?>
        </div>

        <div class="box-footer1">
            <p class="titles-footer">Você pode me encontrar nessas plataformas</p>
            <div class="box-conexoes">
                <?php
                foreach ($redes as $sociais) {
                    echo '
            <a href="' . $sociais['link'] . '" class="itens-f-a" target="_blank">
            <img src="../img/' . $sociais['icon'] . '" class="img-social">
            </a>
    ';
                }
                ?>
            </div>
        </div>

        <div class="ctt">
            <div>
                <p class="titles-footer">Vamos conversar!</p>
                <form action="mailto:juliadeoliveiraec@gmail.com" method="post">
                    <div class="messageBox">
                        <input required="" placeholder="Enviar E-mail" type="text" id="messageInput" />
                        <button id="sendButton">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                                <path
                                    fill="none"
                                    d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"></path>
                                <path
                                    stroke-linejoin="round"
                                    stroke-linecap="round"
                                    stroke-width="33.67"
                                    stroke="#6c6c6c"
                                    d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="wpp">
                <img src="../img/wpp-img.svg">
                <a href="https://wa.me/5511234567890" target="_blank">
                <p>(11) 23456-7890</p>
                </a>
            </div>
        </div>

    </section>
    <p class="copyright">© 2025 | Julia Alves.</p>
</footer>

</html>