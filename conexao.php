
<?php
include('dadosConexao.php');
class Conexao {
    function Conectar(){
        try{
            $conexao = new PDO("psgql:host=".SERVER.";port:5432;dbname=".DBNAME, USER, PASSWORD);
            //$conexao = new PDO("pgsql:host=localhost;dbname=CadastroUsuario","postgres","postgre");
            return $conexao;
        }catch (Exception $erro){
            die("Erro de conexão! Motivo: " .$erro->getMessage());
        }

    }
}