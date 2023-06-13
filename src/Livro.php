<?php

class Livro
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $titulo, string $conteudo): void
    {
        $insereLivro = $this->mysql->prepare('INSERT INTO livros (titulo, conteudo) VALUES(?,?);');
        $insereLivro->bind_param('ss', $titulo, $conteudo);
        $insereLivro->execute();
    }

    public function exibirTodos(): array
    {

        $resultado = $this->mysql->query('SELECT id, titulo, conteudo FROM livros');
        $livros = $resultado->fetch_all(MYSQLI_ASSOC);

        return $livros;
    }
    public function editar(string $id, string $titulo, string $conteudo): void
    {
        $editaLivro = $this->mysql->prepare('UPDATE livros SET titulo = ?, conteudo = ? WHERE id = ?');
        $editaLivro->bind_param('sss', $titulo, $conteudo, $id);
        $editaLivro->execute();
    }

    public function remover(string $id): void
    {
        $removerLivro = $this->mysql->prepare('DELETE FROM livros WHERE id = ?');
        $removerLivro->bind_param('s', $id);
        $removerLivro->execute();
    }

    public function encontrarPorId(string $id): array
    {
        $selecionaLivro = $this->mysql->prepare("SELECT id, titulo, conteudo FROM livros WHERE id = ?");
        $selecionaLivro->bind_param('s', $id);
        $selecionaLivro->execute();
        $livro = $selecionaLivro->get_result()->fetch_assoc();
        return $livro;
    }
}