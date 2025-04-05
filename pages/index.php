<?php
$sobremim = [
    [
        'title' => 'Olá, eu sou a Julia',
        'text' => 'Tenho 17 anos e sou de Santo André. Meu maior objetivo no momento é iniciar uma carreira na área de T.I. como Desenvolvedora Front-End. Embora ainda não tenha experiência profissional, até o momento estive me dedicando afim de buscar capacitação profissional e assim contribuir para a indústria de T.I.',
        'class' => 'container1',
        'img' => 'sobremim-ju.svg'

    ],
    [
        'title' => 'Formação acadêmica',
        'text' => 'Em agosto de 2024 iniciei o Curso Técnico de Desenvolvimento de Sistemas, onde desenvolvo habilidades em tecnologia da informação, incluindo front-end com CSS, HTML e back-end com PHP.',
        'class' => 'container2',
        'img' => 'formacao.svg'


    ],
    [
        'title' => 'Habilidades complementares',
        'text' => 'No início de 2024, concluí um curso de Excel Completo. Além disso, finalizei o curso “CCNA: Introduction to Networks” da Cisco, que me proporcionou uma sólida base dispositivos de rede. Também possuo conhecimento básico em Figma.',
        'class' => 'container1',
        'img' => 'habilidades.svg'
    ]
];


$projetos = [
    [
        'img' => 'bitcoin-img.svg',
        'nome' => 'Guide Bitcoin'
    ],
    [
        'img' => 'nb-img.svg',
        'nome' => 'NeoBank'
    ]

];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Julia Alves</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <script src="../js/pdfdownload.js"></script>

</head>

<body>
    <section class="section-ban">

        <?php require_once '../pages/navbar.php'; ?>

        <main>

            <div class="banner-container">
                <div class="box-banner">
                    <p class="banner-p1">Olá, eu sou</p>
                    <p class="banner-p2">Julia Alves,</p>
                    <p class="banner-p3">Desenvolvedora front-end</p>
                    <button class="btn-download" data-pdf="../pdf/curriculo.pdf">Baixar currículo</button>
                </div>
                <img src="../img/banner-img.svg">
                <div class="box-banner2">
                    <p class="title-box">Acesso rápido</p>
                    <div class="content-box">
                        <a href="#SobreMim" class="categorias">Sobre mim</a>
                        <a href="#Projetos" class="categorias">Projetos recentes</a>
                    </div>
                </div>
            </div>
    </section>

    <section class="section1">
        <p id="SobreMim" class="title-section">Sobre mim</p>

        <?php
        foreach ($sobremim as $sobre) {
            print '
    <div class="' . $sobre['class'] . '">
    <div class="container-content">
    <p class="sobre-title">' . $sobre['title'] . '</p>
    <p class="sobre-text">' . $sobre['text'] . '</p>
    </div>
    <img src="../img/' . $sobre['img'] . '" class="img-sobre">
    </div>
    ';
        }
        ?>
        <div class="btn-social">
            <a href="https://github.com/imjuliz" target="_blank">
                <button class="btn-amarelo2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0.296997C5.37 0.296997 0 5.67 0 12.297C0 17.6 3.438 22.097 8.205 23.682C8.805 23.795 9.025 23.424 9.025 23.105C9.025 22.82 9.015 22.065 9.01 21.065C5.672 21.789 4.968 19.455 4.968 19.455C4.422 18.07 3.633 17.7 3.633 17.7C2.546 16.956 3.717 16.971 3.717 16.971C4.922 17.055 5.555 18.207 5.555 18.207C6.625 20.042 8.364 19.512 9.05 19.205C9.158 18.429 9.467 17.9 9.81 17.6C7.145 17.3 4.344 16.268 4.344 11.67C4.344 10.36 4.809 9.29 5.579 8.45C5.444 8.147 5.039 6.927 5.684 5.274C5.684 5.274 6.689 4.952 8.984 6.504C9.944 6.237 10.964 6.105 11.984 6.099C13.004 6.105 14.024 6.237 14.984 6.504C17.264 4.952 18.269 5.274 18.269 5.274C18.914 6.927 18.509 8.147 18.389 8.45C19.154 9.29 19.619 10.36 19.619 11.67C19.619 16.28 16.814 17.295 14.144 17.59C14.564 17.95 14.954 18.686 14.954 19.81C14.954 21.416 14.939 22.706 14.939 23.096C14.939 23.411 15.149 23.786 15.764 23.666C20.565 22.092 24 17.592 24 12.297C24 5.67 18.627 0.296997 12 0.296997Z" fill="#FFD800"></path>
                    </svg>
                    Acesse meu GitHub
                </button>
            </a>

            <a href="https://www.linkedin.com/in/juliaoliveiraec/" target="_blank">
                <button class="btn-amarelo2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="#ffd800"
                        class=""
                        viewBox="0 0 24 24">
                        <path
                            d="M18.3362 18.339H15.6707V14.1622C15.6707 13.1662 15.6505 11.8845 14.2817 11.8845C12.892 11.8845 12.6797 12.9683 12.6797 14.0887V18.339H10.0142V9.75H12.5747V10.9207H12.6092C12.967 10.2457 13.837 9.53325 15.1367 9.53325C17.8375 9.53325 18.337 11.3108 18.337 13.6245V18.339H18.3362ZM7.00373 8.57475C6.14573 8.57475 5.45648 7.88025 5.45648 7.026C5.45648 6.1725 6.14648 5.47875 7.00373 5.47875C7.85873 5.47875 8.55173 6.1725 8.55173 7.026C8.55173 7.88025 7.85798 8.57475 7.00373 8.57475ZM8.34023 18.339H5.66723V9.75H8.34023V18.339ZM19.6697 3H4.32923C3.59498 3 3.00098 3.5805 3.00098 4.29675V19.7033C3.00098 20.4202 3.59498 21 4.32923 21H19.6675C20.401 21 21.001 20.4202 21.001 19.7033V4.29675C21.001 3.5805 20.401 3 19.6675 3H19.6697Z"></path>
                    </svg>
                    Acesse meu LinkedIn
                </button>
            </a>
        </div>

    </section>

    <section class="section2">
        <p id="Projetos" class="title-section">Projetos recentes</p>
        <div class="container-proj">
            <?php
            $count = 0;

            foreach ($projetos as $projeto) {
                print '
            <div class="gride-proj">
            <img src="../img/' . $projeto['img'] . '" class="img-projeto" href="">
            <p class="name-proj">' . $projeto['nome'] . '</p>
            </div>
    ';
                $count++;
            }
            ?>
        </div>

        <a href="./portfolio.php" class="name-port-a">
            <button class="btn-amarelo3">Ver portfólio<svg
                    stroke-width="2"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    fill="none"
                    class="h-6 w-6"
                    xmlns="http://www.w3.org/2000/svg"
                    width="20px">
                    <path
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                        stroke-linejoin="round"
                        stroke-linecap="round"></path>
                </svg></button>
        </a>
    </section>
    </main>


    <!-- javascript para deixar a rolagem de tela mais suave quando links de ancôra forem clicados -->
    <script>
        document.querySelectorAll('.content-box a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

<?php require_once './footer.php'; ?>

</html>