<?php

// $con = mysqli_query($link, "SELECT * FROM `caderno`");
// $produto = mysqli_fetch_array($con);

// $longarray = $produto['nome'];

include('connect.php');

if(isset($_POST['senha']) AND isset($_POST['email'])){//$nome == " " || $nome == null
	
$email = $_POST['email'];
$senha = $_POST['senha'];

$table = mysqli_query($con, "SELECT * FROM `user_adm` WHERE email='$email' AND password='$senha'");

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
// 			echo "<script>document.body.style.display = 'none'; </script>";
			echo "<script>location.href = '/adm/'; </script>"; 
  }
 }else{
 #$_SESSION['senha'] = md5(time());
 #adiciona um input hidden
  echo "<script>location.href = 'login.php'; </script>";
}
}

	/*}else{
		// if($longarray == $nome){
		echo "<script>alert('Dados encorretos!');</script>";
		setcookie("nome", $nome);
		include('start.php');
	}*/
	
// if(!$senha == $produto){//$nome == " " || $nome == null
// 		echo "<br/><b>Email encorreto!</b>";
// 		include('inde.html');
// 	}else{
// 		// if($longarray == $nome){
			
// 		echo "<br/><b>Email Correto!</b>";
// 		include('inde.html');
// 	}				


// echo $_POST['nome'],"\n"; /*= "$produto[0]<br/>"*/
// echo $_POST['email'], "\n"; /*= "$produto[1]<br/>"*/
// echo $_POST['password'], "<br/>"; /*= "$produto[2]<br/>"*/

//  $nome = $_POST['nome'];
//  $email = $_POST['email'];
//  $senha = $_POST['senha'];
 
 
// $verificar = "f" /*or die("erro ao selecionar")*/;
// if($verificar){
// // if(mysql_num_rows($verificar) <= 0){
// 			echo "<script>Nome ou Senha incorretos</script>";
// 			header("Location:cadastre-se.html");
// 		}else{
// 			setcookie("nome", $nome);
// 			echo "Bem Vindo";
// 			include('inde.html');
// 		}	
// }
  // $entrar = $_POST['submit'];
	// if(isset($entrar)){
	// 	$veririficar = mysql_query("SELECT * FROM caderno WHERE nome = '$nome' AND senha = '$senha' ") or die("erro ao selecionar");
	// 	if(mysql_num_rows($veririficar) <= 0){
	// 		echo "<script>Nome ou Senha incorretos</script>";
	// 	}else{
	// 		setcookie("nome", $nome);
	// 		header("Location:inde.html");
	// 	}
	// }
// function fn_conexao(){

//     $dbuser = "$produto[0]";
//     $dbpass = "$produto[2]";

//     try {

//         $pdo = new PDO('mysql:host=localhost;dbname=tess',  $dbuser, $dbpass);
//         $pdo -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
//         $pdo->exec("SET CHARACTER SET utf8");//corrige os acentos na hora de gravar no BD
//     } catch(Exception $e) {

//         echo 'Erro na conexao: ' . $e->getMessage();
//     }

//     return $pdo;
// }

// function dados($pdo){

//     try {   

//             if(!isset($_GET['id']) or $_GET['id'] == null){

//                 $id = 0; //se o GET nao for enviado o for enviado como nullo , a variável ID pega o valor de 0

//             }else {

//                 $id = $_GET['id']; //pega o valor passado via GET
//             }

//             $arr = array();

//           //aqui , coloquei o limit como 2 para ficar mais facil os testes
//             $sql = "SELECT * from 'table'";
//             $stmt = $pdo->prepare($sql);
//             $stmt->execute();
//             $linha = $stmt->fetchAll(PDO::FETCH_ASSOC);

//             if($stmt->rowCount() >= 1){

//                 return $linha; //retorna o resultado da query

//             }else {

//                 return 0;

//             }
//         } catch(Exception $e) {

//             print 'Erro ao inserir os dados no banco: ' . $e->getMessage();
//             $conexao = desconecta($conexao);

//         }
// }

/*
$deleta = "DELETE FROM caderno WHERE nome='$nome'";
$verDados = "SELECT * FROM caderno OREDER BY ID ASC";
$trocar = "UPDATE caderno SET nome='$nome',senha='$senha' WHERE email='$email'";
*/
?>