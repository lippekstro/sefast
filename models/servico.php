<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/db/conexao.php';

class Servico{
    public $id_servico;
    public $nome_servico;
    public $descricao;
    public $foto_servico;
    public $categoria;
    public $usuario;

    public function __construct($id=false)
    {
        if($id){
            $this->id_servico = $id;
            $this->carregar();
        }
    }

    public function carregar(){
        $sql = "SELECT * FROM servicos WHERE id_servico = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_servico);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $this->nome_servico = $resultado['nome_servico'];
        $this->descricao = $resultado['descricao'];
        $this->foto_servico = $resultado['foto_servico'];
        $this->categoria = $resultado['id_categoria'];
        $this->usuario = $resultado['id_usuario'];
    }

    public function criar(){
        $sql = "INSERT INTO servicos (nome_servico, descricao, foto_servico, id_categoria, id_usuario) VALUES (:nome, :descr, :foto, :cat, :usu)";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_servico);
        $stmt->bindValue(':descr', $this->descricao);
        $stmt->bindValue(':foto', $this->foto_servico);
        $stmt->bindValue(':cat', $this->categoria);
        $stmt->bindValue(':usu', $this->usuario);
        $stmt->execute();
    }

    public static function listar(){
        $sql = "SELECT s.*, u.nome_usuario, u.email, u.telefone, u.site_usuario, c.nome_categoria
        FROM servicos s 
        JOIN usuarios u 
        ON s.id_usuario = u.id_usuario
        JOIN categorias c
        ON s.id_categoria = c.id_categoria";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }
    public static function listarPorId($id){
        $sql = "SELECT s.*, u.nome_usuario, u.email, u.telefone, u.site_usuario, c.nome_categoria
        FROM servicos s 
        JOIN usuarios u 
        ON s.id_usuario = u.id_usuario
        JOIN categorias c
        ON s.id_categoria = c.id_categoria
        WHERE s.id_servico = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $resultado = $stmt->fetch();
        return $resultado;
    }


    public function atualizar(){
        $sql = "UPDATE servicos SET nome_sevico = :nome, descricao = :descr, foto_servico = :foto, id_categoria = :cat WHERE id_servico = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_servico);
        $stmt->bindValue(':descr', $this->descricao);
        $stmt->bindValue(':foto', $this->foto_servico);
        $stmt->bindValue(':cat', $this->categoria);
        $stmt->bindValue(':id', $this->id_servico);
        $stmt->execute();
    }

    public function deletar(){
        $sql = "DELETE FROM servicos WHERE id_servico = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_servico);
        $stmt->execute();
    }
}