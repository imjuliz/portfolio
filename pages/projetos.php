<?php

// os dados contém respectivamente: data de conclusao, nome do projeto, 5 imagens, descrição sobre o projeto, repositorio do projeto

$dados = "OUTUBRO 2024|Guide Bitcoin|bitcoin-pag.png|bitcoin-grafico.png|bitcoin-poder.png|bitcoin-carteira.png|bitcoin-biblioteca.png|Projeto inspirado no Bitcoin.org, criado para praticar e aprimorar habilidades em HTML e CSS. O objetivo era desenvolver uma interface funcional e atraente para facilitar o aprendizado dessas tecnologias.|https://github.com/Matheusrike/Guide-Bitcoin\n";

$dados .= "DEZEMBRO 2024|NeoBank|nb-login.png|nb-home.png|nb-cartoes.png|nb-transf.png|nb-hist.png|A proposta inicial do nosso projeto era criar um sistema de caixa eletrônico que pudesse realizar transferências, saques e outros tipos de operações financeiras. A partir desse tema, surgiu a ideia de criar um banco digital, que demos o nome de NeoBank. No desenvolvimento deste projeto usamos nossos conhecimentos sobre HTML, CSS e PHP aprendidos durante as aulas, além disso, também utilizamos um pouco de JavaScript.|https://github.com/imjuliz/NeoBank\n";

file_put_contents("projetos.txt", $dados);
?>