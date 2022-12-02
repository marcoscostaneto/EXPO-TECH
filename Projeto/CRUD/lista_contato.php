
<html>
<head>
	<title>Listar</title>
	<link rel="icon" href="icone.ico">

	<meta http-equiv="refresh" content="10">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>









</head>



<?php
	include('funcoes.php');
	$contatos = listarContato();
?>
<body style="background-image: url(img/prog.jpg);
color: white;
"

>


<h1 style=
'text-align:center;'
> Lista de Usuários</h1>
	<div style='margin: 15px 50px 20px;'>
	<table class="table" border="">


    <tr class="thead-light" >
      <th style='width: 1%;'>#</th>
      <th  >Nome</th>
    </tr>
	<?php foreach($contatos as $c):?>

  
    <tr>
	<td><?=$c['id']?></td>
      <td><?=$c['nome']?></td>
    
    </tr>
	<?php endforeach?>

</table>
	</div>
	</body>
