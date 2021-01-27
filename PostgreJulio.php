<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contatos</title>
    </head>
    <body>
        <form action="?act=save" method="POST" name="form1" >
          <h1>Agenda de contatos</h1>
          <hr>
          <input type="hidden" name="id" />
          Nome:
          <input type="text" name="nome" />
          E-mail:
          <input type="text" name="email" />
          Telefone:
         <input type="text" name="celular" />
         <input type="submit" value="salvar" />
         <input type="reset" value="Novo" />
         <hr>
       </form>
    </body>
</html>
