<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postgres Júlio</title>
</head>
    <body>
        <h1>Teste Conexão PDO MYSQL Postgres</h1>
        <br>
        <?php


        // include('conexao.php');
        // $object = new Conexao();
        // $conexao = $object->Conectar();


        // $query = "SELECT nome, email, telefone FROM usuario";
        // $return = $conexao->prepare($query);
        // print_r($return);
        // echo "<br>";
        // $return->execute();
        // print_r($return);
        // $dados = $return->fetchAll();

        // echo "index.php";
        // echo "<br>";

        // var_dump($dados);
        // echo "<br>";

        // print_r($query);

        
            // $nome = "Júlio César Rodrigues Piau";
            // $email = "j_piau@hotmail.com";
            // $telefone = "17981903639";

            // echo "Nome: " . $nome;
            // echo "<br>";
            // echo "Email: " . $email;
            // echo "<br>";
            // echo "Telefone: " . $telefone;
            // echo "<br>";
            // echo "<br>";

            // try {
            //     $conexao = new PDO("mysql:host=localhost; port=3306; dbname=cadastro", "root", "");
            //     $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //     echo "Conexão com PDO MYSQL feita com Sucesso!";
            //     echo "<br>";
            //     $query = "SELECT nome, email, telefone FROM usuario";

            //     foreach($conexao->query($query) as $row){
            //         print "<br>";
            //         echo "# Consulta feita com Sucesso! #";
            //         print $row['nome'].' - '.$row['email'].' - '.$row['telefone']."<br/>";
            //     }
            // } catch (PDOException $erro) {
            //     echo "# Erro na conexão: " . $erro->getMessage();
            //     echo "<br>";
            // }


            // try {
            //     $conexao = new PDO("pgsql:host=localhost;dbname=postgres", "postgres", "postgre");
            //     $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //     echo "Conexão com PDO Postgres feita com Sucesso!";
            //     echo "<br>";
                
            //     $query = "SELECT * FROM usuarios";

            //     foreach($conexão->query($query) as $row){
            //         print "<br>";
            //         print $row['nome'].' - '.$row['email'].' - '.$row['telefone']."<br/>";
            //     }
            // } catch (PDOException $erro) {
            //     echo "Erro de conexão: " . $erro->getMessage();
            //     echo "<br>";
            // }

            try {
                myPDO = new PDO("pgsql:host=locahost;dbname:CadastroUsuario","postgres","postgre");
                echo "Conexão com PDO Postgres feita com Sucesso!";
            }catch{(PDOException $e)
                echo $e->getMessage();
            }

    
            //phpinfo();
            //
        ?>
    </body>
</html>

