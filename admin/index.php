<?php

require '../config.php';
include '../src/Livro.php';

$livro = new Livro($mysql);
$livros = $livro->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>
            <?php foreach ($livros as $art) { ?>
            <div id="livro-admin">
                <p><?php echo $art['titulo']; ?></p>
                <nav>
                    <a class="botao" href="./editar-livro.php?id=<?php echo $art['id']; ?>">Editar</a>
                    <a class="botao" href="./excluir-livro.php?id=<?php echo $art['id']; ?>">Excluir</a>
                </nav>
            </div>
            <?php } ?>
        </div>
        <a class="botao botao-block" href="adicionar-livro.php">Adicionar Livro</a>
    </div>
    <div class="ceu"></div>
    <script src="../main.js"></script>
</body>

</html>