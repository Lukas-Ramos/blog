<?php

require 'config.php';

include 'src/Livro.php';
$artigo = new Livro($mysql);
$artigos = $artigo->exibirTodos();

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
        <h1>Minha biblioteca</h1>
        <?php foreach ($artigos as $artigo) : ?>
        <h2>
            <a href="livro.php?id=<?php echo $artigo['id']; ?>">
                <?php echo $artigo['titulo']; ?>
            </a>
        </h2>
        <p>
            <?php 
                $descricao=$artigo['conteudo'];

                if (isset($descricao)) {
                    if (strlen($descricao) > 15) {
                        echo substr($descricao, 0, 15) . '...';
                    } else{
                        echo $descricao;
                    }
                }
                  
            ?>
        </p>
        <?php endforeach; ?>
    </div>
    <div class="ceu"></div>
    <script src="./main.js"></script>
</body>

</html>