<?php
include('connect.php');

if(isset($_POST['autor'])){

    // $id = time();
    $autor = $_POST['autor'];
    $titulo = "---";
    $subtitulo = "---";
    $texto =$_POST['texto'];
    
    $img = $_FILES['img'];
    
    if(isset($img)){
				
    	echo '<a style="display:none">';
    	var_dump($_FILES['img']);
    	echo '</a>';
    
    	$img = $_FILES['img']['name'];
    	$destinoimg = "upload/";
    
    	move_uploaded_file($_FILES['img']['tmp_name'], $destinoimg.$img);
    	
    }
    
    $arquivo = $destinoimg.$img;
    $foto = $destinoimg.$img;

    // $w = mysqli_query($con,"SELECT * FROM `solicitacao");
    
    $in = mysqli_query($con, "INSERT INTO `depoimento`( `autor`, `titulo`, `subtitulo`, `texto`, `img_autor`, `create_time`) VALUES ('$autor','$titulo','$subtitulo','$texto', '$foto', current_timestamp() )")or die('erro table');
    if($in){
        echo "sucesso";
    }else{
        echo "erro";
    }
}