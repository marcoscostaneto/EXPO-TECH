<?php
include('protect.php');?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
  <title></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    
<style>
                  /*inicio -- onde foi importado a fonte*/

      /*@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');*/

      /*fim -- onde foi importado a fonte*/
      :root{
        --slide:slide .3s linear forwards;
      }

      /*inicio -- importante para não bugar*/
      .wrap ,.sidebar ,.list-items{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }

      /*fim -- importante para não bugar*/

      .wrap{
        height: 100%;
        width: 300px;
        position: relative;
        
        
      }

      .wrap .menu-botao{
        position: fixed;
        left: 20px;
        top: 10px;
        background: #4a4a4a;
        color: #fff;
        height: 45px;
        width: 45px;
        z-index: 999999;
        
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        align-content: center;
      }

      #btn:checked ~ .menu-botao{
        left: 247px;
      }

      .wrap .menu-botao i{

        position: absolute;
        
        /*transform: ;*/
        
        font-size: 23px;
        transition: all 0.3s ease;
      }


      .wrap .menu-botao #fa-bars{
        opacity: 1;
        z-index: 2;
        left: 13.5px;
        position: absolute;
      }


      .wrap .menu-botao #fa-times{
        opacity: 0;
        z-index: -2;
      }

      #btn:checked ~ .menu-botao #fa-times{
        opacity: 1;
        transform: rotate(-180deg);
        z-index: 2;
        right: 15.5px;
        position: absolute;
      }

      #btn:checked ~ .menu-botao #fa-bars{
        opacity: 0;
        transform: rotate(180deg);
        z-index: -2;
      }

      #sidebar{
        top: -1px;
        position: fixed;
        background: #3A3ACF;
        height: 100%;
        width: 270px;
        overflow: hidden;
        max-height: 100%;
        left: -270px;
        border-radius: 0 15px 15px 0;
        transition: all 0.3s ease;
        z-index: 99999;
      }

      #btn:checked ~ #sidebar{
        left: 0;
      }
      /*titulo da barra*/
      #sidebar .title{
        line-height: 65px;
        text-align: center;
        background: linear-gradient(90deg,#3A3ACF,#62ABD9);
        font-size: 25px;
        font-weight: 600;
        color: white;
        border-bottom: 1px solid skyblue;
      }
      /*opções da lista*/
      #sidebar .list-items{
        position: relative;
        background: linear-gradient(180deg,#2C2F40,#16164F);
        width: 100%;
        height: 100%;
        overflow: hidden;
        max-height: 100%;
        list-style: none;
        
        
      }

      #sidebar .list-items li{
        padding-left: 40px;
        line-height: 50px;
        
      
        transition: all 0.3s ease;
      }

      #sidebar .list-items li:hover{
        box-shadow: 0 0px 10px 3px #222;
        background:#16164F ; 
        border-right: 5px solid blue;
        
      }
      #sidebar .list-items li:first-child{
        border-top: none;
      }
      /* links da lista*/
      #sidebar .list-items li a{
        color: white;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        height: 100%;
        width: 100%;
        display: block;
        margin-left: 20px;
      }

      #sidebar .list-items li a:hover{
        animation: var(--slide);
        color: #62ABD9;

      }

      #sidebar .list-items li a i{
        margin-right: 20px;
        
      }




      @keyframes slide{
        
        100%{
          transform: translateX(20px);
          font-size: 20px;
        }
      }

</style>

    <!--inicio/ onde foi pegue os icones-->
   <script src="https://kit.fontawesome.com/6bb2b4ffa6.js" crossorigin="anonymous"></script>
   <!--fim/ onde foi pegue os icones-->
  </head>

  <body class="body">
    <!-- inicio/ html da barra-->
    <div class="wrap">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-botao">
        <i class="fas fa-bars" id="fa-bars"></i>
        <i class="fas fa-times" id="fa-times"></i>
      </label>
      <nav id="sidebar" class="sidebar">
        <div class="title">Back-end</div>
        <ul class="list-items">
          
          <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
          
          <li><a href="pg_software.php"><i class="fa-solid fa-laptop"></i> Software</a></li>

          <li><a href="pg_front.php"><i class="fa fa-code"></i></i> Front-end</a></li>

          <li><a href="pg_php.php"><i class="fa-brands fa-php"></i> PHP</a></li>
          
          <li><a href="pg_sql.php"><i class="fa-solid fa-database"></i> SQL</a></li>
          
          <li><a href="pg_python.php"><i class="fa-brands fa-python"></i> Python</a></li>
                    
          <li><a href="sobre.php"><i class="fa-solid fa-users-gear"></i> Developers</a></li>

          <li><a href="jogos/index.html"><i class="fa-solid fa-gamepad"></i> Game</a></li>
          
          <li><a href="../logout.php"><i class="fa-solid fa-door-open"></i> Deslogar</a></li>
        </ul>
      </nav>
    </div>
<!-- fim/ html da barra-->
  </body>
</html>