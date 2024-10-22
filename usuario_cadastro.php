<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php include "referencias.php" ?>
    </head>
    <body>

        <!-- CABEÇALHO -->
        <?php include 'header_admin.php' ?>

        <div id="body" class="contact">
            <div class="footer">
                <div class="contact">
                    <h1>CADASTRAR USUÁRIOS</h1>
            <form action="usuario_castro_salvar.php" method="post">
                <ol>
                    <li>
                        <input name="txtLoginUsuario" type="text" class="textbox" placeholder="Login do usuário"/></li>

                    <li>
                        <input name="txtSenhaUsuario" type="password" class="textbox" placeholder="Senha do usuário"/></li>
                
                    <li>
                        <input type="submit" name="btSalvar" value="Enviar" class="botao" />
                    </li>

                
                </ol>
            </form>
                </div>
            </div>
        </div>
        <!-- RODAPÉ -->
        <?php include 'footer_admin.php' ?>
    </body>
</html>
