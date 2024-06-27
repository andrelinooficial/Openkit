<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open-Kit</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/svg+xml" href="./assets/img/fav.svg">
</head>
<body>
    <nav id="menuPrincipal">
       <a href="./index.php"> <img class="logoDaAplicação" src="./assets/img/logoold.png" alt="Logotipo"></a>
        <ul>
            <a class="linkMenuPrincipal" href="./index.php">🏠 Principal</a><br><br>
            <a class="linkMenuPrincipal" href="./cadastrarOperador.php">📝 Cadastrar Operador</a><br><br>
            <a class="linkMenuPrincipal" href="./listarOperadores.php">🔎 Listar Operadores</a><br><br>
            <!-- <a class="linkMenuPrincipal" href="">🔎 ***</a><br><br>
            <a class="linkMenuPrincipal" href="">🔎 ***</a><br><br> -->
            <a class="linkMenuPrincipal" href="./relatoriosPadroes.php">📑 Relatórios Padrões</a><br><br>
            <a class="linkMenuPrincipal" href="./administracao.php">⚙️ Administração</a><br><br>
        </ul>
    </nav>

    <div id="navTopHome">
        <h3>Cadastro de Operadores</h3>
            <div id="AreaIdentificaUsuarioHome">
            <div style="display:flex;flex-direction:column;">
            <h4 style="color:#4D4D4E; margin-right: 15px; font-family:Arial, Helvetica, sans-serif;">Bem Vindo;</h4><p style="color:#A6B4C6;font-family:Arial, Helvetica, sans-serif; font-size:14px;">Andrelino</p></div>
            <img class="FotoPerfil" src="./assets/img/perfil.png" alt=""></div>

            </div>

    
    <div style="height: 1200px;"></div>


    <div id="formCadastrarOperador">
                <form action="./cadastrarOperador.php" method="post">
                    <label for="Primeiro Nome" class="labelPadrao">Nome:</label><br>
                        <input type="text" name="primeiroNomeOperador" id="primeiroNomeOperador" class="input_txt_form"></input><br><br>

                            <label for="Primeiro Nome"  class="labelPadrao">Sobrenome:</label><br>
                                 <input type="text" name="segundoNomeOperador" id="primeiroNomeOperador" class="input_txt_form"></input><br><br>

                                    <label for="Primeiro Nome"  class="labelPadrao">Nº Registro:</label><br>
                                        <input type="number" name="numeroDeRegistro" id="numeroDeRegistro" class="input_number_form"></input><br><br>

                        <label for="opcoes" class="labelPadrao">Tipo de Operador:</label><br>
                            <select id="opcoes" name="opcoes" class="formOptionSelect">
                                <option value="opcao1">Operador nivel 1</option>
                                    <option value="opcao2">Operador nivel 2</option>
                                        <option value="opcao3">Operador nivel 3</option>
                                            <option value="opcao4">Operador nivel 4</option>
                    </select><br><br>

                    <label for="usuario portal"  class="labelPadrao">Usuário Portal:</label><br>
                        <input type="text" name="usuarioPortal" id="usuarioPortal" class="usuarioPortal"></input><br><br>
                            <label for="senha usuario portal"  class="labelPadrao">Senha:</label><br>
                                <input type="password" name="senhaUsuarioPortal" id="senhaUsuarioPortal" class="senhaUsuarioPortal"></input><br><br>
                    
                    <input type="submit" value="Limpar" id="btnLimparCadastrarUsuario" class="btnLimparCadastrarUsuario">
                    <input type="submit" value="Cadastrar" id="btnCadastrarUsuario" class="btnCadastrarUsuario">

                    
                </form>
        </div>


    <script src="./assets/js/script.js"></script>
</body>
</html>- 