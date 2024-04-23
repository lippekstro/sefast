<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/db/conexao.php';

class Categoria{
    public $id_categoria;
    public $nome_categoria;
    public $foto_categoria;

    public function __construct($id=false)
    {
        if($id){
            $this->id_categoria = $id;
            $this->carregar();
        }
    }

    public function carregar(){
        $sql = "SELECT * FROM categorias WHERE id_categoria = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_categoria);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $this->nome_categoria = $resultado['nome_categoria'];
        $this->foto_categoria = $resultado['foto_categoria'];
    }

    public function criar(){
        $sql = "INSERT INTO categorias (nome_categoria, foto_categoria) VALUES (:nome, :foto)";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_categoria);
        $stmt->bindValue(':foto', $this->foto_categoria);
        $stmt->execute();
    }

    public static function listar(){
        $sql = "SELECT * FROM categorias";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    public function atualizar(){
        $sql = "UPDATE categorias SET nome_categoria = :nome, foto_categoria = :foto WHERE id_categoria = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_categoria);
        $stmt->bindValue(':foto', $this->foto_categoria);
        $stmt->bindValue(':id', $this->id_categoria);
        $stmt->execute();
    }

    public function deletar(){
        $sql = "DELETE FROM categorias WHERE id_categoria = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_categoria);
        $stmt->execute();
    }
}