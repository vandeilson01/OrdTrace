
<?php
//Chat
if(isset($_POST['sim'])){
	$id = $_POST['id']; 
	include('connect.php');
$table = mysqli_query($con, "SELECT * FROM `solucoes` WHERE id_solucoes='$id'");
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

$longarray = $produto['id_solucoes'];

	if(!$id == $produto['id_solucoes']){
		
	}else{
		if($longarray == $id){
		$insert = mysqli_query($con, "DELETE FROM `solucoes` WHERE id_solucoes='$id'");	
		
		if($insert){
			
			echo "sucesso";
		}else{
			echo "erro";
		}
			
		
	}else{
		echo "erro 1";
		
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
