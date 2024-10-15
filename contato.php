<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Frozen Sorvetes</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloformularios.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" />
        <script src="js/mobile.js" type="text/javascript"></script>

        <script src="mascaras.js" type="text/javascript"></script>


        <!-- Bootstrap -->
        <link href="css_bootstrap/bootstrap.min.css" rel="stylesheet" />

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"/></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js_bootstrap/bootstrap.min.js"></script>
    </head>
    <body>


        <!-- CABEÇALHO -->
        <?php
        include 'header.php'
        ?>

        <!-- CORPO -->
        <form action="" method="post">
            <div id="body" class="contact">
                <div class="footer">
                    <div class="contact">

                        <h1>FALE CONOSCO</h1>

                        <ol>
                            <li>
                                <input type="text" name="txtNome" class="textbox" required  placeholder="Nome completo"/></li>

                            <li>
                                <input type="text" name="txtEmail" required class="textbox" placeholder="E-mail" /></li>

                            <li>
                                <input type="text" name="txtAssunto" required class="textbox" placeholder="Assunto"/></li>
                            <li>
                                <textarea name="txtMensagem" requerid class="textboxMaior" placeholder="Digite aqui a sua mensagem." ></textarea>
                            </li>

                            <li>
                                <input type="submit" name="btSalvar" value="Enviar" class="botao" />
                            </li>
                        </ol>


                    </div>

                </div>
            </div>
        </form>

        <!-- RODAPE -->
        <?php
        include 'footer.php'
        ?>

    </body>
</html>
