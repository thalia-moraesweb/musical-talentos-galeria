<?php
// Parte 01: Identificar o arquivo aberto
$pagina = basename($_SERVER['PHP_SELF']); /* Essa função consegue extrair o nome do arquivo aberto - $_SERVER['PHP_SELF'] - é um array pré configurado, do PHP */


// Parte 02: Condicional para avaliar qual pág está aberta e definir qual título utilizar
switch ($pagina) {
    case 'index.php':
        $titulo = "Página Inicial";
        break; /* break - se for verdadeiro pare por aqui - se não tivesse o break ia ficar carregando o pag infinitamemte ou poderia dar um resultsado inesperado */
    case 'instrumentos.php':
        $titulo = "Instrumentos e Apoio";
        break;
        case 'comunicados.php':
            $titulo = "Comunicados e Apoio";
            break;
    default:
        $titulo = "Contato e Inscrições";
        break;
}
/* Alteração dos nomes das case e dos $titulo */
/* já foi direcionado para a inscrição teste */


?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>

    <!-- Atalho CTRL+clicar no link, cria pasta e arquivo automaticamente -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Cabeçalho -->
    <header>

        <div class="menu navbar nav">

            <a class="navbar-brand" href="index.php">Musical Talentos</a>

            <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarDropdown">
                <span>&#9776;</span>
            </button>

            <ul class="navbar-nav">
                <li class="nav-link"><a href="index.php">Home</a></li>
                <li class="nav-link"><a href="instrumentos.php">Instrumentos</a></li>
                <li class="nav-link"><a href="galeria.php">Galeria</a></li>
                <li class="nav-link"><a href="comunicados.php">Comunicados</a></li>
                <li class="nav-link"><a href="contatoinscricoes.php">Inscrições</a></li>

            </ul>

        </div>

    </header>
    <main>