<?php

require 'config.php';
require 'src/Livro.php';

$obj_artigo = new Livro($mysql);
$artigo = $obj_artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Minha Biblioteca</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>
            <?php echo $artigo['titulo']; ?>
        </h1>
        <p>
            <?php echo $artigo['conteudo']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
    <div class="ceu"></div>
    <script src="./main.js"></script>
</body>

</html>