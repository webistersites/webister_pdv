<?php
include "conectar_mysql.php";
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/skeleton.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Produtos | PizzariaWeb</title>
</head>
<body>


<?php
	include "conectar_mysql.php";

	$query = mysql_query("SELECT * FROM produtos");

	echo "Olá ".$_SESSION['usuarioNome'].", <a href='logout.php'>sair</a>"
?>

<div class="container">

<p><h1>Produtos</h1></p>

<table>
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Preço</th>
	</tr>

	<a href="../projetopizzaphp" class="button button-primary">Voltar</a>


<?php
while($ver=mysql_fetch_array($query)){

	echo "<tr>";
    echo "<td>".$ver['id_produtos']."</td>";
    echo "<td>".$ver['nome']."</td>";
    echo "<td>".$ver['preco']."</td>";
    echo "</tr>";
}
?>
</table>
</div>
</body>
</html>