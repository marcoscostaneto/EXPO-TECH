
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href= "css/login.css">
    <link rel="stylesheet" href= "css/index.css">

    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">



</head>

<body>
    <header>
    </header>
    <section>
        <div id="login-container">

            <h1>Login</h1>
            <form action="" method="post">
                <label for="user">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome de usuário" autocomplete="off">

               <div>
                  <label for="password">Senha:</label>
                  <!-- Aqui começa o sistema de ocultar ou mostrar a senha-->
                    
                  <nobr id="input">
                  <img src="http://i.stack.imgur.com/H9Sb2.png">
                      <input type="password" name="senha" id="senha" 
                      placeholder="Digite sua senha">  
                      
                  </nobr>
              </div>

                <script> input = document.querySelector('#input input');
    var img = document.querySelector('#input img');
    img.addEventListener('click', function () {
      input.type = input.type == 'text' ? 'password' : 'text';
    });</script>
    
  
                <!-- Aqui termina -->


                <b style="color: #ff3131;
                font-size: 12px;">

<?php
include('PhpIndex.php');?>

</b>

                <input type="submit" name="entrar" value="Entrar" onMouseOut="this.style.color='white'" onMouseOver="this.style.color='#1B223C'"
                style="text-align: center;
                    text-transform: uppercase;
                    font-weight: bold;
                    border: none;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 30px;
                    color: #FFF;
                    background-color: #08558B;
                    cursor: pointer;"

                >




            </form> 
            <form action="registro.php">
                <button type="submit" name="registrar" onMouseOut="this.style.color='white'" onMouseOver="this.style.color='#8B0000'"
                 style="
                    text-align: center;
                    text-transform: uppercase;
                    font-weight: bold;
                    border: none;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 30px;
                    color: #FFF;
                    background-color: red;
                    cursor: pointer;">Registrar</button>
            </form>
            
       
            
            <p>&copy;MáquinasProgramadoras</p>
        
        </div>
    </section>
</body>
</html>