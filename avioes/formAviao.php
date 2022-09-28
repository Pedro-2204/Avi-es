<?php
if (isset($_GET['metodo'])) {
	$metodo = $_GET['metodo'];
	$acao = 'recuperarAviao';
	$id = $_GET['id'];

	require_once 'controller/aviao.controller.php';
	foreach ($aviao as $indice => $aviao) {
		$id = $aviao->id;
		$nome = $aviao->modelo;
		$email = $aviao->prefixo;
		$senha = $aviao->marca;
		$senha = $aviao->classificacao;
		$senha = $aviao->capacidade;
	}
}
?>

<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Pedro Rodrigues">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title>Aviões</title>
	<style>
		h1 {
			text-align: center;
			color: #191970;
		}

		input[type=text],
		input[type=email],
		select {
			position: absolute;
			left: 100px;
		}

		body {
			background-position: center;
		}

		.linha {
			border-width: 0.5px;
		}

		

		.container-fluid {
			background-color: #DCDCDC;
		}

		hr {
			border-width: 3px;
			border-color: black;
		}

		#formu {
			background-color: #E6E6FA;
			border-radius: 10px;
		}

		legend {
			color: #191970;
		}
	</style>
</head>

<body background="https://media.istockphoto.com/photos/white-plane-on-the-blue-runway-top-view-and-white-background-minimal-picture-id1297855347?b=1&k=20&m=1297855347&s=170667a&w=0&h=RxFx8vsv0F9jnTmvZP35g-H6ssWqTNCJ6Zx_s2ocz2k=">
	<div class="container-fluid">
		<h1 align="center">Cadastro de Aviões</h1>
		<hr>
	</div>
	<br><br><br><br><br>
	<div class="row">
		<div class="col-lg-4 col-sm-4" "col-md-4">
		</div>
		<div class="col-lg-4 col-sm-4" "col-md-4">
			<div class="container-fluid" id="formu">
				<form method="post" action="avioes.controller.php?acao=inserir" name="formcadav">
					<fieldset class="formulario">
						<legend><b>Formulário do Avião</b></legend>
						<hr class="linha">

						<label>Modelo: </label>
						<input name="modelo" type="text" value="<?php if(isset($modelo)){echo $modelo;}else{echo '';}?>" placeholder="Insira o modelo do avião"><br>

						<label>Prefixo: </label>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input name="prefixo" type="text" value="<?php if(isset($prefixo)){echo $prefixo;}else{echo '';}?>" size="20" maxlength="7" placeholder="EX: XXX-XXX"><br>

						<label>Marca: </label>
						<input name="prefixo" type="text" value="<?php if(isset($marca)){echo $marca;}else{echo '';}?>" placeholder="(Gol, Azul, LATAM, etc)"><br>

						<label>Classificação: </label>
						<input name="classificacao" type="radio" value="Militar">Militar
						<input name="classificacao" type="radio" value="Civil">Civil<br>

						<label for="exampleInputPassword1">Capacidade de Tripulantes: <br>	</label>
						<input class="cap" name="capacidade"  value="<?php if(isset($capacidade)){echo $capacidade;}else{echo '';}?>" type="number"><br>

						<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';} ?>">
						<button type="submit" class="btn btn-dark"><?php if(!isset($metodo)){echo 'Inserir';}elseif($metodo=='alterar'){echo 'Alterar';}else{echo 'Remover';}?></button>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4" "col-md-4">
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>