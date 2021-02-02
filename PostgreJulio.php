<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postgres Júlio</title>
</head>
    <body>
        <h1>Teste Conexão PDO Postgres</h1>
        <br>
        <?php

            // Este teste deve ser desenvolvido em HTML, PHP e POSTGRES
            // 1- Crie as variáveis: nome, email, telefone e atribua valores à elas.

            $ativo = true;
            $nome = "Jose Maria Trindade";
            $email = "trindade@hotmail.com";
            $telefone = "511425369870";

            echo "Nome: " . $nome;
            echo "<br>";
            echo "Email: " . $email;
            echo "<br>";
            echo "Telefone: " . $telefone;
            echo "<br>";
            echo "<br>";

            try {
                $conexao = new PDO("pgsql:host=localhost;dbname=CadastroUsuario","postgres","postgre");
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexão I com PDO Postgres feita com Sucesso!";
                echo "<br>";
            } catch (PDOException $erro) {
                echo "Erro de conexão POSTGRES: " . $erro->getMessage();
                echo "<br>";
            }
            // 2 - Desenvolva um trecho de código para inserir "INSERT" essas variáveis em uma base Postgres.
            $query = "INSERT INTO usuario (ativo, nome, email, telefone) VALUES ('true', 'Antony ', 'antony@hotmail.com', '321654987231')";
            $return = $conexao->prepare($query);
            $return->execute();
            $dados = $return->fetchAll();


            // 3- Desenvolva um trecho de código para fazer a seleção "SELECT" das informações
            // inseridas no exercício 2.
            $query =    "SELECT nome, email, telefone FROM usuario";
            $return = $conexao->prepare($query);
            $return->execute();
            $dados = $return->fetchAll(PDO::FETCH_ASSOC);

            //var_dump($dados);
            echo "<br>";
            echo "<br>";
            foreach($dados as $dado){
                echo "NOME: ".$dado['nome']." + "."E-MAIL: ".$dado['email']." + "."TELEFONE: ".$dado['telefone']."<hr>"."<br>";
            };

            echo "<br>";
            echo "<br>";

            // 4- Desenvolva um trecho de código para Editar "UPDATE" os campos nome, email e telefone de um dos registros
            // dentro do banco de dados.
            $query =    "UPDATE usuario SET nome = 'Bolsonaro', email = 'bolso@hotmail.com', telefone = '012365547898' WHERE id = 32";
            $return = $conexao->prepare($query);
            $return->execute();
            $dados = $return->fetchAll();

            // 5 - Desenvolva um trecho de código para deletar "DELETE" um registro específico
            // dentro do banco de dados.
            $query =    "DELETE FROM usuario WHERE id = 34";
            $return = $conexao->prepare($query);
            $return->execute();
            $dados = $return->fetchAll();

            // 6- Desenvolva um trecho de código para fazer uma condicional. Se uma variável 'nome' estiver preenchida, 
            //exiba o conteúdo da variável. 
            // Caso esteja vazia, exiba variável ,vazia.

            if(!empty($nome)){
                echo "Variável atribuída com o valor: ".$nome."<br>";
            }else{
                echo "Variável vazia: ".$nome." sem valor atribuído."."<br>";
            }

            echo "<br>";
            echo "<br>";
            
            // 7 -Desenvolva um trecho de código para fazer um laço de repetição que exiba uma lista numérica de 0 a 100, 
            //pulando uma linha entre cada número.

            for ( $i=0; $i <= 100; $i++ ) {
                echo $i."<br>";
            }

        ?>
    </body>
</html>

