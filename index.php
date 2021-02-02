<?php
include('conexao.php');
$object = new Conexao();
$conexao = $object->Conectar();


//$query = "SELECT nome, email, telefone FROM usuario";
$query = "INSERT INTO usuario 
(ativo, nome, email, telefone)
VALUES 
(TRUE, 'Jair Messias Bolsonaro', 'bolsonaro@hotmail.com', '17981909999')";

$return = $conexao->prepare($query);

$return->execute();
$dados = $return->fetchAll();

echo "index.php";

var_dump($dados);

