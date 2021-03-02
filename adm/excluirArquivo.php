<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alerta</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
		<div class="row">
				<div class="col-md-4"></div>
			<div class="col-md-4">
				<h2>Alerta</h2>
				<form action="#" method="post">
				<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Deseja mesmo excluir esse produto? <a href="index.php" class="pull-right"><em class="fa fa-lg fa-close"></em></a>
				<?php
					echo '<input type="hidden" name="esp" value="'.$_POST['esp'].'">';
					echo '<input type="hidden" name="id" value="'.$_POST['id'].'">';
				?>
				<button type="submit" name="sim" style="color:#000;" class="btn">Sim</button>
				<button type="submit" name="nao" class="btn btn-primary">Não</button>
				</form>
				</div>
			</div>
			<div class="col-md-4"></div>
			
	</div><!--/.row-->
</div>
<?php
//Chat
if(isset($_POST['sim'])){
	$id = $_POST['id']; 
	include('connect.php');
$table = mysqli_query($con, "SELECT id FROM `".$_POST['esp']."` WHERE id = '$id'");
$produto = mysqli_fetch_array($table);

// if (!$link) {
//     echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; 
//     exit;
// }
 
// // echo "<script>alert('Conectado!');</script>";
// echo "Conectado" . PHP_EOL;

// // // mysqli_open($produto);
// mysqli_close($link);

/*
$ii = mysqli_query($link, "INSERT INTO caderno(titulo,email, senha) VALUES('$titulo', '$email', '$senha')");
if($ii){
	echo "Cadastrado";
}else{
	echo 'erro';
}
*/

// echo '<p style="font-size:27px;">Comente</p>';
// $ver= 0;
// while($ver = mysqli_fetch_array($table)){
// 	echo "<tr>";
// 	echo '<li> Codigo: ' .$ver["titulo"]." ----->";
// 	echo " Lucro: " .$ver["comentario"]."</li>";
//   echo "</tr>";
// }

$longarray = $produto['id'];

	if(!$id == $produto['id']){
		
	}else{
		if($longarray == $id){
		$insert = mysqli_query($con, "DELETE FROM `".$_POST['esp']."` WHERE id ='$id'");	
		
		if($insert){
			echo "<script>location.href = 'index.php'</script>";
			echo "sucesso";
		}else{
			echo "<script>location.href = 'index.php'</script>";
			echo "erro";
		}
			
		
	}else{
		echo "<script>location.href = 'index.php'</script>";
		
		die();
		
	  }
	}
  }else if(isset($_POST['nao'])){
	  echo "<script>location.href = 'index.php'</script>";
  }
/*
$titulo = $_POST['nome'];
$comentario = $_POST['comentario'];
if(isset($_POST['nome']) AND isset($_POST['comentario'])or die('erro1'))
	{
 if($_POST['nome'] !=NULL AND $_POST['comentario'] !=NULL)
 {
   mysql_connect("localhost","root","");
   mysql_select_db("comentarios");

   $comentario = mysql_real_escape_string(htmlspecialchars($_POST['comentario']));
   $nome = mysql_real_escape_string(htmlspecialchars($_POST['nome']));

   mysql_query("INSERT INTO comentarios(nome, comentario) VALUES('$nome','$comentario')");
   mysql_close();
 }
}
*/
?>
</body>
</html>