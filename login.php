<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body class="corFundoLogin">
    <div id="container">
        <div id="boxFormLogin">
            <img class="logoLogin" src="./assets/img/logo.png" alt="Logotipo">
            
          <form action="index.php" method="POST"><br>
            <label class="fontFormLogin" for="login">Login:</label><br>
            <input type="email" name="email" id="loginEmail" ><br><br>
            <label class="fontFormLogin" for="login">Senha:</label><br>
            <input type="password" name="senha" id="loginSenha" ><br><br>
            <input type="submit" value="Acessar" id="btnLogar"><br>
          </form>
        
        </div>
        <p class="txtWhitePadrao"><strong>Sistema Desenvolvido por:</strong>  <a style="color: white;" href="https://github.com/andrelinooficial"  target="_blank">Andrelino Lima</a> </p>
    </div>

</body>
</html>