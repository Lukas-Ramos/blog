
<?php

require '../config.php';
include '../src/Livro.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $livro = new Livro($mysql);
    $livro->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo']);

    redireciona('./index.php');
}

$livro = new Livro($mysql);
$art = $livro->encontrarPorId($_GET['id']);

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar livro</title>
</head>

<body>
    <div id="container">
        <h1>Editar Livro</h1>
        <form action="editar-livro.php" method="post">
            <p>
                <label for="titulo">Digite o novo título do Livro</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do Livro</label>
                <textarea class="campo-form" type="text" name="conteudo" id="titulo"><?php echo $art['conteudo']; ?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Livro</button>
            </p>
        </form>
    </div>
    <div class="ceu"></div>
    <script src="../main.js"></script>
</body>

</html>