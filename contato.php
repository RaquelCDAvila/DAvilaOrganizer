<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CONTATO-DavilaOrganizer</title>
        <link rel="stylesheet" type="text/css" href="CSS/estiloPrincipal.css">
        <link rel="stylesheet" type="text/css" href="CSS/estiloHome.css">
        <link rel="stylesheet" type="text/css" href="CSS/estiloContato.css">
        <script type="text/javascript" language="javascript" src="js/script.js"></script>
        <link rel="shortcut icon" href="Imagens/logo_pequena.png">
    </head>
    <body>
        <header>
            <img id="logo" src="Imagens/logo_davila_transparente_menor.png" alt="Logo DAvilaOrganizer">    
        </header>
        <nav id="menuPrincipal">
            <ul >
                <li>
                    <a href="index.php" target="_self"> Home</a>
                </li>
                <li>
                    <a href="blog.php" target="_self"> Blog</a>
                </li>
                <li>
                    <a href="sobre_mim.php" target="_self"> Sobre mim</a>
                </li>
                <li>
                    <a href="contato.php" target="_self"> Contato</a>
                </li>
            </ul>
             <!--Migalha de pão-->
            <p><a href="index.php">Home</a></a> | <a href="contato.php">Contato</a></a></p>
        </nav>
        <div id="conteudoContato">
            <hgroup id="contato">
                <p>Entre em contato por telefone, e-mail ou whatsapp:</p>
                <ul>
                    <li><b>Telefone:</b> +55 (48) 99602-4134</li>
                    <li><b>E-mail:</b> davilaorganizer@gmail.com</li>
                    <li><a  class="classWhatsapp" href="https://api.whatsapp.com/send?phone=5548996024134&text=Bem%20vindo(a)%20ao%20DavilaOrganizer" target="_blank">
                    <img src="imagens/logo_whatsapp.png"></li><a></li>
                </ul>
            </hgroup>
            <!--Existe dois método para form, o GET, mais veloz, nemos seguro e o POST, mais lento, porém mais seguro, encapsulamento -->
            <hgroup>
                <form id="formContato" method="POST" action="email.php">
                    <fieldset>
                        <legend>Dúvidas e Comentários</legend>
                        <label>Nome:</label>
                        <input type="text" name="nome" id="id_nome" placeholder="digite seu nome completo" size="60" maxlength="100" required onchange="maiusculas()"><br>
                        <label>E-mail:</label>
                        <input type="email" name="email" id="id_email" placeholder="digite seu e-mail" size="60" maxlength="100" required><br>
                        <label>Mensagem:</label>
                        <textarea name="mensagem" id="id_mensagem" placeholder="digite aqui sua mensagem" cols="80" rows="8" required onclick="trocaCorCampo()"></textarea><br>
                        <input type="checkbox" name="notificacao" id="id_notificacao"checked/> 
                        Desejo receber notificações de novas postagens.<br>
                        <button type="submit" id="id_enviar">Enviar</button>
                    </fieldset>
                </form>
            </hgroup>
            <hgroup id="local">
                <p><b>Endereço:</b> Servisão Maria Serafina de Oliveira, 127, - Cachoeira do Bom Jesus - Florianópolis.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.490403153513!2d-48.43803038543354!3d-27.42282342127525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952743b0c8fcf2b1%3A0x6d7cdb413c711e20!2sPersonal%20Organizer%20-%20DavilaOrganizer!5e0!3m2!1spt-BR!2sbr!4v1630625125080!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </hgroup>
        </div>
        <?php
        include_once "c:/xampp/htdocs/site_DavilaOrganizer/Includes/footer.html";
        ?>
    </body>
</html>

