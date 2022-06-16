<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastrar</title>


</head>

<body>
    <!-- Parte responsável pelo formulário de cadastro -->
<div id="cadastro">
        <form name="form1" method="post" action="../controle/inserir.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome">Seu nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>

          <p>
            <label for="turma">Turma:</label>
            <select name="turma">
                <option value="1A">1A</option>
                <option value="1B">1B</option>
                <option value="1C">1C</option>
                <option value="1D">1D</option>

                <option value="2A">2A</option>
                <option value="2B">2B</option>
                <option value="2C">2C</option>
                <option value="2D">2D</option>

                <option value="3A">3A</option>
                <option value="3B">3B</option>
                <option value="3C">3C</option>
                <option value="3D">3D</option>

            </select>
</p>
           
          <p> 
            <label for="senha">Sua senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"> 
          </p>
           <!-- Ir para a página de login -->
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
  
       



        </form>
    </div>


</body>

</html>
