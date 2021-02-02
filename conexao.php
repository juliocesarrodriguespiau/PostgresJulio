
<?php
include('dadosConexao.php');
class Conexao {
    function Conectar(){
        try{
            $conexao = new PDO("mysql:host=".SERVER.";dbname=".DBNAME, USER, PASSWORD);
            return $conexao;
        }catch (Exception $erro){
            die("Erro de conexão! Motivo: " .$erro->getMessage());
        }

    }
}