
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
        
<fieldset style="background-color: rgb(228, 228, 228);">
	<legend><h1 style="font-family:verdana;background-color:#b8c0e6;color: black;">Dados</h1></legend>

        <?php

            $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
            $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);

                echo "Nome: $nome<br>";
                echo "Idade: $idade<br>";
                

//conectando com o MySQL

    $con = mysqli_connect("localhost","root","galbrat258456");

// Conectando com o Banco de dados:

    $db = mysqli_select_db($con, "formulario") or 
		die("Erro na seleção/abertura do banco:" . mysqli_error($con) );

// Inserindo valores ao banco de dados

        $sql =	"INSERT INTO dados 
		(id,		nome,		idade)	
		VALUES
		('0',		'$nome',		'$idade')";

        mysqli_query($con, $sql) or 
        die("Erro no cadastro do usuário." 
        .mysqli_error($con) );

//Enviando o comando de inclusão para o banco de dados
        
    echo "<hr>Usuário <b>$nome</b> cadastrado com sucesso!";
	echo "<br>";
	echo "Clique <a href='index.html'>aqui</a> para cadastrar um novo usuário";

    ?>
    </fieldset>
    
    

</body>
</html>

