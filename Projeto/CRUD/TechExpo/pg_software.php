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
        <title>Software</title>
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
                            <h1>Software</h1>
                           
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

                        <h2 class="section-heading">O que é Software?</h2>
                        <p>&emsp;Software é um conjunto de instruções que devem ser seguidas e executadas por um
mecanismo, seja ele um computador ou um aparato eletromecânico. É o termo
usado para descrever programas, apps, scripts, macros e instruções de código
embarcado diretamente (firmware), de modo a ditar o que uma máquina deve fazer.
Todo programa em seu computador, celular, tablet, smart TV, console de videogame,
set-top box e etc. é um software, seja ele um editor de textos, um navegador, um
editor de áudio ou vídeo, um jogo, um app de streaming e por aí vai. Um software
pode se apresentar de várias formas, por isso se divide em três categorias
principais: Com base em sua aplicação, os softwares são classificados em três
grandes categorias: softwares de programação, de sistema e de aplicação.</p>
                        <h2 class="section-heading">Softwares de sistema</h2>
                        <p>&emsp;São os programas encarregados de fazer a comunicação entre o computador, que

só entende linguagem de máquina, e o usuário, sendo a base em que outros

softwares, como os de aplicação e os de programação irão rodar. Ou seja, são
plataformas para fazer funcionar outros softwares. Os sistemas operacionais como
Windows, macOS, Linux, iOS, Android, por exemplo, são softwares de sistema. Em
alguns casos, softwares de aplicação podem assumir o papel de sistemas
operacionais, como o Chrome OS, onde o navegador é um software de sistema e de
aplicação. Firmwares, softwares de automação industrial e motores gráficos de
jogos também são exemplos de softwares de sistema.</p>

                        <h2 class="section-heading">Softwares de aplicação</h2>
                        <p>&emsp;Essa categoria inclui programas mais conhecidos, como players de vídeo e música,
jogos, editores de textos, calculadoras, navegadores, aplicativos de redes sociais
etc. Um software de aplicação permite que o usuário realize uma ou mais tarefas
específicas.Embora tenha aplicabilidades muito positivas, essa categoria inclui
softwares maliciosos, os chamados malwares, que são desenvolvidos para causar
danos nos dispositivos e podem inclusive roubar os dados armazenados nos
aparelhos.</p>
                    <h2 class="section-heading">Softwares de programação</h2>
                        <p>&emsp;São as ferramentas usadas pelo programador para desenvolver novos softwares e
programas. Usam diferentes linguagens de programação (C, Java, Python, Swift,
etc.) e abrigam compiladores, intérpretes e depuradores, por exemplo. Os editores
de texto, embora sejam softwares de aplicação, também são softwares de
programação, pois podem ser usados para escrever <a href="Bloco.php"  class="blocoLink">código.</a></p>

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
            <li><a href="Download/Software.pdf" download="O que Software"><i class="fa-solid fa-download"></i></a></li>
            <li><a href="https://www.instagram.com/techlearn.expo/?igshid=YmMyMTA2M2Y"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.google.com/maps/place/EEEP+Walter+Ramos+de+Ara%C3%BAjo/@-3.6142424,-38.9629464,17z/data=!3m1!4b1!4m5!3m4!1s0x7c0c36aa9160203:0xc94fb2900457b754!8m2!3d-3.6142424!4d-38.9629464?authuser=0"><i class="fa-solid fa-location-dot"></i></a></li>
            <li ><a href="#moon"><i class="fa-solid fa-moon"  id="moon" onclick="escuro()"></i></a></li>
          </ul>
                  
          <p>&copy;MáquinasProgramadoras</p>       
          
          </div>
  
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="pgs_js/scripts.js"></script>
    </body>
</html>
