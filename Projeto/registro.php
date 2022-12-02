

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href= "css/login.css">
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
</head>
<body>
    <header>
    </header>
    <section>
    <div id="login-container">
    <h1>Registrar nova conta </h1>
        <form action="CRUD/salva_contato.php" method='post'>
       
        <label for="user">Nome:</label>
        <input type="text" placeholder="Digite seu nome de usuário" id="nome" name='nome' required>
       <div>
       <label for="password">Senha:</label>
        <input type="password" placeholder="Senha" id="password" name='senha' required>
        

</div>
<label for="password">Repita a senha:</label>
        <input type="password" placeholder="Confirme Senha" id="confirm_password" required>
   
        <button type="submit" style=" text-align: center;
                text-transform: uppercase;
                font-weight: bold;
                border: none;
                height: 40px;
                border-radius: 20px;
                margin-top: 30px;
                color: #FFF;
                background-color: #08558B;
                cursor: pointer;">Confirmar</button>
        </form>



        <form action="index.php" method="post">
        <button type="submit" style="
                    text-align: center;
                    text-transform: uppercase;
                    font-weight: bold;
                    border: none;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 30px;
                    color: #FFF;
                    background-color: red;
                    cursor: pointer;" >Voltar</button>
   
</form>
</div>
<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


</script>

      
    </section>
    <footer>

    </footer>
</body>
</html>