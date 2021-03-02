<?php
//Chat
include('connect.php');

$table = mysqli_query($con, "SELECT * FROM `news`");
$produto = mysqli_fetch_array($table);

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$descricao = $_POST['descricao'];
$texto = $_POST['texto'];
$referencias = $_POST['referencias'];

$id = time();

$size = 'size';


$longarray = $produto['id_news'];

	
	
	if(isset($_POST['enviar'])){
				
				echo '<a style="display:none">';
				var_dump($_FILES['img']);
				echo '</a>';
			
				$img = $_FILES['img']['name'];
				$destinoimg = "upload/";
	
				move_uploaded_file($_FILES['img']['tmp_name'], $destinoimg.$img);
				
			}
			$foto = $destinoimg.$img;
		    $insert = mysqli_query($con, "INSERT INTO news
			(
				id_news,titulo,subtitulo,referencias,descricao,texto,img,create_time
				)
			 VALUES('$id','$titulo','$subtitulo','$referencias','$descricao','$texto','$foto'
			 ,current_timestamp())");		
		
		if($insert){
// 			echo "<script>location.href = 'adicionar.php'</script>";
			echo "sucesso";
		}else{
			echo "erro";
// 			echo "<script>location.href = 'adicionar.php'</script>";			
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