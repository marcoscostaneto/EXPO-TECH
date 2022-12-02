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
        <title>Front-end</title>
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
                            <h1>Front-end</h1>
                            
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

                        <h2 class="section-heading">O que é o HTML?</h2>
                        <p>&emsp;A Linguagem de Marcação de Hipertexto (HTML) é uma linguagem de computador que compõe a maior parte das páginas da internet e dos aplicativos online. Um hipertexto é um texto usado para fazer referência a outros textos, enquanto uma linguagem de marcação é composta por uma série de marcações que dizem para os servidores da web qual é o estilo e a estrutura de um documento. Com o HTML, os usuários podem criar e estruturar seções, parágrafos e links usando elementos, tags e atributos.</p>
                        <h2 class="section-heading">Confira abaixo alguns dos usos mais comuns para o HTML:</h2>
                        <p>&emsp;Desenvolvimento web. Os desenvolvedores usam códigos HTML para projetar como um navegador vai exibir os elementos das páginas, como textos, hiperlinks e arquivos de mídia.
                            Navegação na internet. Os usuários podem navegar facilmente e inserir links entre páginas e sites relacionados, já que o HTML é amplamente usado para incorporar hiperlinks.
                            Documentação. O HTML torna possível a organização e a formatação de documentos, de maneira similar ao Microsoft Word.
                        </p>

                        <h2 class="section-heading">O que é o CSS?</h2>
                        <p>&emsp;CSS é chamado de linguagem Cascading Style Sheet e é usado para estilizar elementos escritos em uma linguagem de marcação como HTML. O CSS separa o conteúdo da representação visual do site. Pense na decoração da sua página. Utilizando o CSS é possível alterar a cor do texto e do fundo, fonte e espaçamento entre parágrafos. Também pode criar tabelas, usar variações de layouts, ajustar imagens para suas respectivas telas e assim por diante.
                            A relação entre HTML e CSS é bem forte. Como o HTML é uma linguagem de marcação (o alicerce de um site) e o CSS é focado no estilo (toda a estética de um site), eles andam juntos.</p>
                    
                        <h2 class="section-heading">Como CSS Funciona?</h2>
                        <p>&emsp;O CSS é uma ferramenta muito potente que possibilita criar diversas funcionalidades ao invés de usar JavaScript ou outra linguagem mais pesada. Se usado com moderação, CSS pode viabilizar uma ótima experiência ao desenvolvedor e usuários das páginas web. Com o Cascading Style Sheets é possível criar animações complexas, criar efeitos com uso de parallax, que faz parecer que a imagem de fundo tem uma profundidade diferente um dos outros, criar sites interativos e também jogos com HTML5 e CSS3.</p>

                        <h2 class="section-heading">O que é o JavaScript(JS)?</h2>
                        <p>&emsp; <a href="Bloco.php" class="blocoLink">Javascript</a> é a terceira camada do bolo de desenvolvimento web e front-end, junto com HTML e CSS. Antes de mais nada, vamos deixar claro: Javascript não é Java. Apesar da confusão que as pessoas normalmente fazem sobre essas duas linguagens, Java e Javascript não possuem nenhuma ligação direta uma com a outra a não ser o java no nome. Tendo isso em mente, vamos para a definição de o que é Javascript. O JS ou JavaScript é uma linguagem de programação de alto-nível, criada no meio da década de 90, mais precisamente em 1996 pelo lendário programador Brendan Eich que, além de criar o JavaScript, foi também um dos fundadores da Mozilla Corporation.</p>

<h2 class="section-heading">Como o JavaScript se diferencia das outras linguagens de programação?</h2>
                        <p>&emsp;A linguagem de programação Javascript permite ao desenvolvedor implementar diversos itens de alto nível de complexidade em páginas web, como animações, mapas, gráficos ou informações que se atualizam em intervalos de tempo padrão, por exemplo.

O JavaScript tem uma série de vantagens que fazem com ele seja a melhor escolha entre seus competidores. Especialmente em certos tipos de usos e casos. Abaixo estão apenas alguns dos benefícios de usar a linguagem JS:
<ol>
<li>Você não precisa de um compilador porque os navegadores de internet o interpretam com HTML;</li>
<li>É mais fácil de aprender do que as outras linguagens de programação;</li>
<li>Erros são bem mais fáceis de localizar e, por conta disso, de serem corrigidos;</li>
<li>Ele pode ser designado a certos elementos de páginas de internet ou eventos específicos, como cliques e rolagens de mouse personalizados;</li>
<li>É totalmente compatível com várias plataformas e navegadores;</li>
<li>Você pode validar entradas e reduzir a necessidade de verificações manuais de dados;</li>
<li>Ele faz com que os sites sejam bem mais interativos e segurem a atenção dos visitantes por mais tempo, característica que define a experiência do usuário (UX).</li>
<li>Ele é mais rápido e mais leve que outras linguagens de programação.</li>
</ol>
</p>

<!-- <a href="Bloco.html">código.</a> -->


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
            <li><a href="Download/front.pdf" download="O que Front-end"><i class="fa-solid fa-download"></i></a></li>
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
