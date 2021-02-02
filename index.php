<?php
include('conexao.php');
$object = new Conexao();
$conexao = $object->Conectar();


$query = "SELECT nome, email, telefone FROM usuario";
$return = $conexao->prepare($query);

$return->execute();
$dados = $return->fetchAll();

echo "index.php";

var_dump($dados);

