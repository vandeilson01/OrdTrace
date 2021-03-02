<?php

if(isset($_POST['submit'])){
	
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$tipo_pagamento = $_POST['tipo_pagamento'];
$informacoes_validas = $_POST['informacoes_validas'];
$nome_cartao = $_POST['nome_cartao'];
$numero_cartao = $_POST['numero_cartao'];
$validade_cartao = $_POST['validade_cartao'];
$cvv_cartao = $_POST['cvv_cartao'];

$esp = $_POST['esp'];
$id = $_POST['id'];

$preco = $_POST['preco'];

include('connect.php');

$table = mysqli_query($con, "INSERT INTO `compras`(`nome`, `email`, `endereco`, `cep`,
	 `informacoes_validas`, `credito_debito`, `nome_do_cartao`, `numero_do_cartao`, `validade_do_cartao`, 
	 `numero_cvv`, `produto_id`, `valor_da_comprar`) 
	 VALUES('$nome','$email','$endereco','$cep','$informacoes_validas','$tipo_pagamento','$nome_cartao',
	 '$numero_cartao','$validade_cartao','$cvv_cartao','$id','$preco')");

    
	if($table){
		echo "Sucesso";
		echo "<script>location.href = 'sucesso.php'</script>";
	}else{
		echo "Erro";
		echo "<script>location.href = 'comprar.php'</script>";
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