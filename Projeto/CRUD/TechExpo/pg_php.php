<?
include('protect.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PHP</title>
        <link rel="shortcut icon" href="assets/img/icon.png">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
  <!--inicio/ onde foi pegue os icones-->
   <script src="https://kit.fontawesome.com/6bb2b4ffa6.js" crossorigin="anonymous"></script>
   <!--fim/ onde foi pegue os icones-->
   
        <link href="pgs_css/styles.css" rel="stylesheet">
          
    </head>

    <?php
    include_once("navbar.php");
    ?>

    <body class="bodyMain" id="bodyMain" class="bodyMain">
        <!-- Page Header-->
        <header class="masthead" style="
        z-index: 1;
        background-image: url('assets/img/Pc.jpg')"  id="header">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7" >
                        <div class="post-heading" >
                          <div class="titulo">
                            <h1>PHP</h1>
                          
                            </div>
              
                        </div>
                    </div>
                </div>
            </div>
        </header>
                
        <!-- Post Content-->
        <article class="mb-4 tet">
            
            <div class="container px-4 px-lg-5" >

                <div class="row gx-4 gx-lg-5 justify-content-center">
                  

                    <div class="col-md-10 col-lg-8 col-xl-7">

                        <h2 class="section-heading">O que ?? PHP?</h2>
                        <p>&emsp;O PHP ?? uma linguagem <a href="Bloco.php" class="blocoLink">open</a> source, ou seja, de c??digo aberto e conta com uma grande comunidade de pessoas desenvolvedoras. Al??m disso, tem uma sintaxe simples e f??cil de aprender, o que a torna ainda mais popular e requisitada pelo mercado de desenvolvimento web. A linguagem PHP ?? uma linguagem de script, isso significa que ela ?? processada no momento que ?? executada e esse poder da linguagem fez ela funcionar muito bem para constru????o de p??ginas HTML. Com isso, o c??digo PHP pode ser inserido entre o c??digo HTML, dentro de tags que o interpretador reconhece, assim voc?? sabe exatamente onde um c??digo PHP come??a e termina.</p>
                        <h2 class="section-heading">Hist??ria do PHP</h2>
                        <p>&emsp;O php foi criado em 1994, desde de ent??o, sofreu grandes evolu????es. Tratando-se de uma linguagem de script com alta popularidade e que ?? utilizada por grandes empresas da internet, como Facebook, Yahoo, Wikip??dia, WordPress e muitas outras.</p>

                        <h2 class="section-heading">Caracter??sticas:</h2>
                        <ol>
<li>Simplicidade: ?? uma linguagem f??cil de se aprender, al??m de poder ser implementada de diferentes formas em um desenvolvimento web.</li>

<li>Efici??ncia: tem um excelente desempenho, podendo ser facilmente integrado com diferentes bancos e dados, como o MySql, MariaDB, Oracle entre outros. O php tamb??m suporta o processamento de grande volume de dados com pouco consumo do servidor.</li>

<li>Multiplataforma: As aplica????es em PHP podem ser desenvolvidas e utilizadas em Windows, Linux, UNIX e MacOS. Al??m disso, ela tamb??m pode ser instalada em plataformas de computa????o em nuvem e acessado por diferentes navegadores.</li>

<li>C??digo aberto: O PHP ?? uma linguagem de c??digo aberto, onde sua licen??a permite o uso da linguagem sem que voc?? precise pagar por isso. Portanto, basta fazer o download e a instala????o no ambiente desejado.</li>
</ol>

                    </div>
                    
                </div>
                
            </div>

        </article>

        <!-- Footer-->
        <footer class="footer" >

         <div class="waves">
           <div class="wave" id="wave1" style="background-image: url('assets/img/wave.png')"></div>
           <div class="wave" id="wave2" style="background-image: url('assets/img/wave.png')"></div>
           <div class="wave" id="wave3" style="background-image: url('assets/img/wave.png')"></div>
           <div class="wave" id="wave4" style="background-image: url('assets/img/wave.png')"></div>
           
         </div>
               
         <div class="footerConteudo">
           
         <ul class="rodape">
            <li><a href="Download/PHP.pdf" download="O que PHP"><i class="fa-solid fa-download"></i></a></li>
            <li><a href="https://www.instagram.com/techlearn.expo/?igshid=YmMyMTA2M2Y"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.google.com/maps/place/EEEP+Walter+Ramos+de+Ara%C3%BAjo/@-3.6142424,-38.9629464,17z/data=!3m1!4b1!4m5!3m4!1s0x7c0c36aa9160203:0xc94fb2900457b754!8m2!3d-3.6142424!4d-38.9629464?authuser=0"><i class="fa-solid fa-location-dot"></i></a></li>
            <li ><a href="#moon"><i class="fa-solid fa-moon"  id="moon" onclick="escuro()"></i></a></li>
          </ul>
                  
          <p>&copy;M??quinasProgramadoras</p>     
          
          </div>
  
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="pgs_js/scripts.js"></script>
    </body>
</html>
