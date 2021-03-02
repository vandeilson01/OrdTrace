<?php 

// $con = mysqli_query($link, "SELECT * FROM `caderno`");
// $produto = mysqli_fetch_array($con);

// $longarray = $produto['nome'];
if(isset($_POST['senha']) AND isset($_POST['email'])){//$nome == " " || $nome == null
	
$email = $_POST['email'];
$senha = $_POST['senha'];

include('connect.php');
$table = mysqli_query($con, "SELECT email,senha FROM `login` WHERE email='$email' AND senha='$senha'");

$num = mysqli_num_rows($table);

if($num == 1){
  while($start = mysqli_fetch_array($table)){//$_SESSION['senha'] AND $_SESSION['nome'] AND $_SESSION['email']
    //post valiido
	$nomes = $start['email'];
	
	session_start();
	// echo "<script>location.href = 'index.php'; </script>";

	if($nomes = 1){
		$_SESSION['nomes'] = $email;
	}else{
		$_SESSION['nomes'] = $email;
	}
			// header("adminEdita.php");
			echo "<script>document.body.style.display = 'none'; </script>";
			echo "<script>location.href = '/adm?".SID."'; </script>"; 
  }
 }else{
 #$_SESSION['senha'] = md5(time());
 #adiciona um input hidden
 echo "<script>location.href = /login-adm; </script>";
}
}
