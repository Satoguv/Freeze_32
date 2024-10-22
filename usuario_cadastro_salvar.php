<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "referencias.php" ?>
</head>
<body>
    <!-- INCLUSÃO DO CABEÇALHO -->
    <?php include "header_admin.php" ?>

    <!-- INCLUSÃO DO RODAPÉ -->
    <?php include "footer_admin.php" ?>

    <?php 
        //1º PASSO: Inclusão das funções de acesso a dados
        include "conexao_bd.php";

        //2º PASSO: Capturar o login e senha digitado pelo usuário
        $login_usuario = $_POST["txtLoginUsuario"];
        $senha_usuario = $_POST["txtSenhaUsuario"];

        $hash = password_hash($senha_usuario,1);

        //3º PASSO: Comando SQL
        $sql = " INSERT INTO usuario(login_usuario,senha_usuario) ";
        $sql .= "VALUES ('$login_usuario','$hash') ";

        //4º PASSO: Executar no BDA
        if(executarComando($sql))
        {
            echo "<h1>Usuário Adicionado</h1>";
        }

        else
        {
            echo "<h1>Usuário nao cadastrado</h1>";
        }

    ?>
</body>
</html>