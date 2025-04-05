<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>

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

        /* estilização da navbar */
        nav {
            margin-top: 1vh;
            width: 95%;
            height: 10vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: transparent;
        }

        nav ul {
            display: flex;
            padding: 0;
            margin: 0;
            width: 40%;
            justify-content: space-evenly;
            align-items: center;
        }

        nav ul li {
            list-style: none;
        }

        nav li a {
            color: #FFD800;
            text-decoration: none;
            font-family: 'Urbanist Medium';
            font-size: 15px;
        }

        a{
            text-decoration: none;
        }

        .btn-nav {
            border: 0;
            font-family: 'Urbanist Medium';
            font-size: 15px;
            height: 5vh;
            width: 8vw;
            color: #FFD800;
            background-color: transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .logonav{
            width: 3vw;
        }

        .p-icon{
            color: #FFD800;
            font-family: 'Urbanist SemiBold'
        }

        .logo-container{
            display: flex;
            align-items: center;
        }

    </style>
</head>

<body>
    <nav>

        <a href="../pages/index.php" class="logo-container">
            <img src="../img/favicon.png" class="logonav">
            <p class="p-icon">Julia Alves</p>
        </a>

        <ul class="ulnav">
            <li>
                <a href="../pages/index.php">Página inicial</a>
            </li>
            <li>
                <a href="../pages/portfolio.php">Portfólio</a>
            </li>

            <a href="mailto:juliadeoliveiraec@gmail.com" class="nav-btn-a">
                <button class="btn-nav">Enviar E-mail<img src="../img/seta-diag-dir.svg"></button>
            </a>

        </ul>

    </nav>
</body>

</html>