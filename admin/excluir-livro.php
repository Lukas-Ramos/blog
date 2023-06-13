<?php

require '../config.php';
include '../src/Livro.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $livro = new Livro($mysql);
    $livro->remover($_POST['id']);

    redireciona('./index.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Livro</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o Livro?</h1>
        <form method="post" action="excluir-livro.php">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button class="botao">Excluir</button>
            </p>
        </form>
    </div>
    <div class="ceu"></div>
    <script src="../main.js"></script>
</body>

</html>