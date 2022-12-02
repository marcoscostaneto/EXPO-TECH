<?
include('protect.php')
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="sobre/style.css">
    <link rel="shortcut icon" href="assets/img/icon.png">



    <!--inicio/ onde foi pegue os icones-->
    <script src="https://kit.fontawesome.com/6bb2b4ffa6.js" crossorigin="anonymous"></script>
    <!--fim/ onde foi pegue os icones-->
</head>
<?php
    include_once("navbar.php");
    ?>
<body>
 


    <div class="tituloSobre">


        <h1 align="center">Desenvolvedores do site Back-End</h1>
    </div>



    <div class="conteudo">



        <div class="cartoes">
            <div class="imgCaixa">
                <img src="sobre/fotos/marcos.jpg">
            </div>

            <div class="textos">
                <h2>Marcos Costa</h2>

                <!--ALERTA | o limite de caracteres do P por linha precisa ser de 33-->

                <p style="text-align: center;">(Programador Chefe)
                </p>

                <br>
                <br>

                <ul class="rodape">
                    <li><a href="https://www.instagram.com/m4rc0snet0/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/marcos-costa-pereira-neto-140692240"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://contate.me/programador-full-stack" ><i class="fa-brands fa-whatsapp"></i></a></li>

                </ul>






            </div>
        </div>


        <div class="cartoes">
            <div class="imgCaixa">
                <img src="sobre/fotos/eric.jpg">
            </div>

            <div class="textos">
                <h2>Eric Andrade</h2>

                <!--ALERTA | o limite de caracteres do P por linha precisa ser de 33-->

                <p style="text-align: center;">(Coordenador de Desing)
                </p>


                <br>
                <br>

                <ul class="rodape">
                    <li><a href="https://www.instagram.com/techlearn.expo/?igshid=YmMyMTA2M2Y"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/eric-sousa-de-andrade-171803240"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://contate.me/comemiojo"><i class="fa-brands fa-whatsapp"></i></a></li>

                </ul>






            </div>
        </div>

        <div class="cartoes">
            <div class="imgCaixa">
                <img src="sobre/fotos/jullio.jpg" onclick="ativar()">
            </div>

            <div class="textos">
                <h2>Jullio César</h2>

                <!--ALERTA | o limite de caracteres do P por linha precisa ser de 33-->

                <p  style="text-align: center;"></p>(Gerente de Produção <a href="miniGame/miniGame.html">e</a> Aux. de Back e Front-end)
                </p >

                <br>
                <br>

                <ul class="rodape">
                    <li><a href="https://www.instagram.com/jullio_54s/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/júllio-césar-7a071b240"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://contate.me/julliocesar"><i class="fa-brands fa-whatsapp"></i></a></li>

                </ul>






            </div>
        </div>


        <div class="cartoes">
            <div class="imgCaixa">
                <img src="sobre/fotos/luckas.jpg">
            </div>

            <div class="textos">
                <h2>Luckas Wendell</h2>

                <!--ALERTA | o limite de caracteres do P por linha precisa ser de 33-->

                <p style="text-align: center;">(Auxiliar de Front-end)
                </p>

                <br>
                <br>

                <ul class="rodape">
                    <li><a href="https://twitter.com/kk__alucard?t=JT0VXILtaRrr0nzG1Hk1GA&s=09"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/alucard.kk_/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/lucas-wendell-315804240/"><i class="fa-brands fa-linkedin"></i></a></li>

                </ul>






            </div>
        </div>


        <!--Nº5-->
        <div class="cartoes">
            <div class="imgCaixa">
                <img src="sobre/fotos/murilo.jpg">
            </div>

            <div class="textos">
                <h2>Murilo Matos</h2>

                <!--ALERTA | o limite de caracteres do P por linha precisa ser de 33-->

                <p style="text-align: center;">(Escritor)
                </p>

                <br>
                <br>

                <ul class="rodape">
                    <li><a href="https://www.instagram.com/murilin07/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/murilo-matos-786258210"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/murilo_2005"><i class="fa-brands fa-twitter"></i></a></li>

                </ul>






            </div>
        </div>


        <!--Nº6-->
        <div class="cartoes">
            <div class="imgCaixa">
                <img src="sobre/fotos/arthur.jpg">
            </div>

            <div class="textos">
                <h2>Arthur Araújo</h2>

                <!--ALERTA | o limite de caracteres do P por linha precisa ser de 33-->

                <p style="text-align: center;">(Escritor)
                </p>

                <br>
                <br>

                <ul class="rodape">
                    <li><a href="https://contate.me/arthuraraujo"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://www.instagram.com/bartsu017_/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/arthur-araujo-moraes-3a5801240"><i class="fa-brands fa-linkedin"></i></a></li>

                </ul>






            </div>
        </div>







    </div>







    <script src="sobre/script.js">

    </script>






</body>

</html>