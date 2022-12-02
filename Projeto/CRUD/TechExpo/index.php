
<?php
include('protect.php');?>
<!doctype html>
<html>
<head>
 <title>Home</title>
 <link rel="stylesheet" href="pg_home/home.css">
 <link rel="shortcut icon" href="assets/img/icon.png">

     <!--inicio/ onde foi pegue os icones-->
   <script src="https://kit.fontawesome.com/6bb2b4ffa6.js" crossorigin="anonymous"></script>
   <!--fim/ onde foi pegue os icones-->
   
</head>
<body class="bodyHome">
   <header class="header">    
     <nav class="menuHome">

      <a href="https://www.instagram.com/techlearn.expo/" class="Logo" style="font-size: 40px; cursor: pointer;"><i class="fa-brands fa-instagram"></i>
              
       <ul>
               
         <li><a href="sobre.php">Sobre</a></li>
         <li><a href="../logout.php">Deslogar</a></li>
       </ul>
       
     </nav>
       
   <section class="principalHome">
     <div class="pacDiv" >
            <!--pac-->   
         <div class="cancelar" id="principal">
            <div class="cancelar"  id="pac" onclick="ativar()"></div>
         </div>
     
       <!--/pac-->       
       <h1  onclick="mudou()" >TechExpo<a href="#" style="display: none; color: white;" id="link">!</a></h1>
</div>     
       <div class="descricao">
          <a href="pg_software.php" class="">Back-End</a>
       </div>      
   </section>

 </header>  
  <script src="pg_home/home.js"></script>
</body>
</html>