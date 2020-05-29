<?php
session_start();
include_once("protect.php");
  protect();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>	
	<body background="img/001.jpg" >
	<div class="container">
	<div class="form-signin" style="background: #eeee">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
	<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
  	<h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
	</div>

	<div class="text-center">
		<h1>Lista Jogos Cadastrados</h1>
	</div>
		<?php
	

		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 5;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usercadastrojogos LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "ID: " . $row_usuario['id'] . "<br>";
			echo "Campeonato: " . $row_usuario['campeonato'] . "<br>";
			echo "Timedacasa: " . $row_usuario['timedacasa'] . "<br>";
			echo "Timevisitante: " . $row_usuario['timevisitante'] . "<br>";
			echo "Local Jogo: " . $row_usuario['localjogo'] . "<br>";
			echo "Data do Jogo: " . $row_usuario['datajogo'] . "<br>";
			echo "Horário: " . $row_usuario['horario'] . "<br>";
			echo "valor: " . $row_usuario['valor'] . "<br></br>";
		}
		?>		
	</body>
</html>