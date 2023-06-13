<?php

require '../config.php';
require '../src/Livro.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $livro = new Livro($mysql);
    $livro->adicionar($_POST['titulo'], $_POST['conteudo']);

    redireciona('./index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Livro</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Livro</h1>
        <form action="adicionar-livro.php" method="post">
            <p>
                <label for="">Digite o título do Livro</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite o conteúdo do Livro</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
            </p>
            <p>
                <button class="botao">Cadastrar livro</button>
            </p>
        </form>
    </div>
    <div class="ceu"></div>
    <script src="../main.js"></script>
</body>

</html>