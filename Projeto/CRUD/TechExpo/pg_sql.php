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
        <title>SQL</title>
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
                            <h1>SQL</h1>
                         
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

                        <h2 class="section-heading">O que é SQL?</h2>
                        <p>&emsp;SQL é uma linguagem padrão para trabalhar com bancos de dados relacionais. Ela é uma linguagem declarativa e que não necessita de profundos conhecimentos de programação para que alguém possa começar a escrever queries, as consultas e pedidos, que trazem resultados de acordo com o que você está buscando. SQL significa “Standard Query Language”, literalmente a linguagem padrão para realizar queries.

A linguagem SQL é utilizada de maneira relativamente parecida entre os principais bancos de dados relacionais do mercado: Oracle, MySQL, MariaDB, PostgreSQL, Microsoft SQL Server, entre muitos outros. Cada um tem suas características, sendo o MySQL e o PostgreSQL extremamente populares por possuírem versões gratuitas e de código aberto.

É também uma linguagem que muitos <a href="Bloco.php" class="blocoLink">profissionais</a> acabam precisando aprender: seja quem usa Excel de forma pesada e acaba migrando as informações para um banco de dados, seja um cientista de dados que usa Python para agregar os dados das diferentes fontes de informações.</p>

                        <h2 class="section-heading">Comandos SQL- DDL</h2>
                        <ol>Para começar a trabalhar com bancos de dados (DATABASES) e com tabelas (TABLES). <br>
Show Databases: Mostra as Databases disponíveis para se trabalhar/utilizar.
<br>
Create database (nomedatabase): Cria uma Database (Ou banco de dados).
<br>
Use (database): Especifica a Database a ser utilizada.
<br>
Show tables: Mostra as tabelas contidas numa database.
<br>
Describe (tabela): Descreve a estrutura do arquivo.
<br>
Create table (tabela) ([nomecampo] [tipo]): Cria uma tabela conforme as especificações (TIPOS) mencionadas aos campos/atributos.
<br>
Alter Table (tabela) add ( [atributo] [valor],… ): Insere um ou mais atributo(s) na Tabela.
<br>
Drop Table (tabela): Exclui a tabela de um Banco de Dados.
</ol>

<h2 class="section-heading">Comandos SQL- DML</h2>
<ol>
Insert into (tabela) values ([valor1],[valor2]...[valor n]):
Para INSERIR dados em uma tabela (Inserir conforme o tipo atribuído ao
atributo na criação da tabela, ou seja, com ou sem  ́haspas ́).
<br>
Update (tabela) set (atributo) = (novo_valor):
Para ALTERAR TODOS os dados dos atributos em todos os registros da
Tabela.
<br>
Update (tabela) set (atributo) = (novo_valor) where (condição):
Para ALTERAR os dados dos atributos desejados nos registros da Tabela
conforme especificado na condição WHERE.
<br>
Select (atributos) from (tabela):
Para EXIBIR os dados dos atributos desejados de TODOS os registros da
Tabela.
<br>
Select (atributos) from (tabela) where (condição):
Para EXIBIR os dados dos atributos desejados de todos os registros da Tabela
conforme especificado na condição WHERE.
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
            <li><a href="Download/SQL.pdf" download="O que SQL"><i class="fa-solid fa-download"></i></a></li>
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
