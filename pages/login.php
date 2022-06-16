<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>LOGIN</title>
</head>
<body>
<div class="content">
    
         <!-- Formulário de login -->
    
      <div id="login">
        <form method="post" action="../controle/login.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Email: </label>
            <input id="nome_login" name="email" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Senha: </label>
            <input id="email_login" name="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
             <!-- Ir para a página de cadastro -->
          <p class="link">
            Ainda não tem conta?
            <a href="cadastro.php">Cadastre-se</a>
              
          </p>
             <!-- Fim -->
        </form>
      </div>
</body>
</html>
