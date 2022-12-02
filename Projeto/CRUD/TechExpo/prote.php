<!doctype html>
<html>
<head>
 <title>Erro</title>
 <!--<link rel="stylesheet" href="style.css">-->
 <link rel="shortcut icon" href="icon.png" type="image/x-icon">


 <style>
 
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, Sans-Serif;
}


.erro{
  width: 100%;
  height: 100%;
  background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('Error.jpeg');
  background-position: center;
  background-size: cover;
  position: absolute;
  
  
}
.principalErro{
  position: relative;
  bottom: 10%;
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  align-content: center;
  justify-content: center;
  flex-direction: column;
  flex-wrap: wrap;
  
}


.principalErro h1{
  color: white;
  font-size: 45px;
  opacity: 0.8;
}

.principalErro a{
  color: red;
  padding: 10px 10px;
  display: inline-block;
  border: 1px solid red;
  margin-top: 20px;
  border-radius: 10px;
  transition: 200ms;
  text-decoration: none;
  background: black;
  transition:all 0.4s ease-in-out;
}


.principalErro a:hover{
  color: white;
  background: red;
  border: 1px solid transparent;
  box-shadow: white 0px 0px 3px 3px;
  animation: subir 0.4s linear forwards;
  cursor: pointer;
  transition:all 0.4s ease-in-out;
}


@keyframes subir{
  100%{
    transform: translateY(-7px);
  }
}


@media (max-width: 480px){


.erro{
  background-size: 200% 100%;
  background-repeat: no-repeat;
  background-position-x: 45.5%;
}

.principalErro h1{
  font-size: 30px;
}



}
 </style>
 
 
</head>
<body>


<header class="erro">

<section class="principalErro">
  
  <h1>VOCÊ NÃO ESTÁ LOGADO</h1>
  
  <a href="../../../index.php">LOGAR</a>
</section>


</header>

 <script>
   
 </script>
</body>
</html>