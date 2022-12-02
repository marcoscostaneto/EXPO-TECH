<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gamezin</title>
  <link rel="stylesheet" href="pgs_css/styleBloco.css">
  <!--inicio/ onde foi pegue os icones-->
   <script src="https://kit.fontawesome.com/6bb2b4ffa6.js" crossorigin="anonymous"></script>
   <!--fim/ onde foi pegue os icones-->
   <link rel="shortcut icon" href="icon.png" type="image/x-icon">
</head>
<body>
  


<meta name="viewport" content="width=device-width,user-scalable=no">

<div id="container">
	<div id="game"></div>
	<div id="score">0</div>
	<div id="instructions">Clique (ou aperte a barra de espaço) para colocar o bloco

</div>
	
	<div class="game-over">
		<h2>Fim de Jogo</h2>
		<p>Você foi bem</p>

		<p>Clique para tentar denovo</p>
	</div>
	<div class="game-ready">
		<div id="start-button">começar</div>
		<div></div>
	</div>
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script  src="pgs_js/scriptBloco.js"></script>

</body>
</html>
