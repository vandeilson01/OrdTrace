<?php
if(isset($_POST['sim'])){
	
	include('connect.php');

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$subTitulo = $_POST['subTitulo'];
$create_time = $_POST['create_time'];

$id = $_POST['id'];
// echo ;
// $arquivo = $_POST['arquivo'];
$table = mysqli_query($con, "SELECT * FROM `projetos` WHERE id_projeto='$id'");
$produto = mysqli_fetch_array($table);

// if (!$link) {
//     echo "Error: Falha ao conectar-se com o banco de dados MySQ2." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; 
//     exit2
// }
 
// // echo "<script>alert('Conectado!');</script>";
// echo "Conectado" . PHP_EOL;

// // //2mysqli_open($produto);
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

// if(isset($_POST['sim'])){
				
// 				echo '<a style="display:none">';
// 				var_dump($_FILES['img']);
// 				echo '</a>';
			
// 				$img = $_FILES['img']['name'];
// 				$destinoimg = "upload/";
	
// 				move_uploaded_file($_FILES['img']['tmp_name'], $destinoimg.$img);
				
// 			}
// 			$img = $destinoimg.$img;
			
			

$longarray = $produto['id_projeto'];

	
		if($longarray == $id){
		$insert = mysqli_query($con, "UPDATE `projetos` SET
			 titulo='$titulo',size='null',subTitulo='$subTitulo',descricao='$descricao',categoria='$categoria',create_time='$create_time' WHERE id_projeto='$id'")or die('erro');	
		
		if($insert){
			
			echo "sucesso";
		}else{			
			echo "erro1";
			// echo "<script>location.href = 'galeria.php'</script>";
		}
			
		
	}else{
// 		echo "<script>location.href = 'galeria.php'</script>";
        echo "erro 2";
		die();
		
	  }
		
	
}else{
    echo "erro3";
// 	echo "<script>location.href = 'galeria.php'</script>";
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