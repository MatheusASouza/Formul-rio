<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Cadastro</title>
</head>

<body>
	
	<div  id="principal">
		<fieldset style="background-color: rgb(228, 228, 228);">
			<legend><h1 style="font-family:verdana;background-color:#b8c0e6;color: black;">Cadastro</h1></legend>
		
			<form method="POST" action="processamento.php">
				<label>
					Nome: 
					<input
					type="text" 
					name="nome" 
					placeholder="Digite seu nome completo"
					required
					maxlength="20"
					size="20">
					<br>
					<br>
					
					Idade: 
					<input	type="number" 
					name="idade" 
					placeholder="Idade"
					required
					maxlength="20"
					size="20">
					<br>
					
					<hr>
					<input id="botao" type="submit" value="Cadastrar">
					
				</label>
			</form>
			
		</body>
</html>