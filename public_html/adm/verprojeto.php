<?php 
// 		include('connection.php');
		session_start();
		if(isset($_SESSION['nomes'])){
					if (!array_key_exists('visitas', $_SESSION)){
			$_SESSION['visitas'] = 1;
			// echo '<a style="color:#eee">Acesso '.$_SESSION['visitas'].'</a>';
		}else {
			 $d = $_SESSION['visitas']++;
			//  echo '<a style="color:#eee">Acesso '.$d.'</a>';
			
		}
		#}else if(isset($_SESSION['adm'])){
			#echo "Bem vindo".$_SESSION['adm'];
		}else{
			echo "<script>location.href='login.html';document.body.style.display='none';</script>";
		}

// if(array_key_exists('HTTP_USER_AGENT', $_SESSION)){
// 	    if($_SESSION['HTTP_USER_AGENT'] !=
// 		 md5($_SERVER['HTTP_USER_AGENT'])){
// 		 /* Acesso inválido. O header User-Agent mudou durante a mesma sessão. */ 
// 		 exit;     
// 		 } 
// } else {
// 	   /* Primeiro acesso do usuário, vamos gravar na sessão um  hash md5 do header User- Agent */ 
// 	 $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']); 
// } 		
		// if(usuario_autenticado($clean['usuario'], $clean['senha'])) {    
			// 	session_regenerate_id(); 
			// }
			
			include('connect.php');
			  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mudano produto</title>
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
	<style>
		.produto-img{
			width: 100%;
			height: auto;
		}
		.container{
			margin-bottom: 5%;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_POST['sim'])){
			
		}else{
			echo "erro";
			echo "<script>location.href = 'index.php'</script>";
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h5><label>Compra:</label> <?php echo $_POST['id'];?></h5>
				<?php
					$table = mysqli_query($con, "SELECT * FROM `solicitacao` WHERE id_solicitacoes='".$_POST['id']."'")or die('erro');
					while($produto = mysqli_fetch_array($table)){
						
					
          								
          								$equals = mysqli_query($con, "SELECT * FROM `projetos` WHERE id_projeto='".$produto['id_projeto']."'")or die('erro');
          								
          								
          								    if($nov_equals = mysqli_fetch_array($equals)){
          								        echo '<img style="width: 100%;" id="'.$nov_equals["id_projeto"].'" src="'.$nov_equals["id_img"].'">
          								        ';
          								   }
          								    
                            
				?>
				<?php
					}
				?>
			</div>
			<div class="col-md-4">
		<?php
			$table = mysqli_query($con, "SELECT * FROM `solicitacao` WHERE  id_solicitacoes='".$_POST['id']."'");
			while($dad = mysqli_fetch_array($table)){
		?>
								
								<label>nome</label> 
								<div class="form-group has-success">
								<?php echo $dad['nome'];?>
								</div>
								<label>email</label>
								<div class="form-group has-success">
								<?php echo $dad['email'];?>
								</div>
								<label>tel</label>
								<div class="form-group has-success">
								<?php echo $dad['tel'];?>
								</div> 
								<label>desejo</label>
								<div class="form-group has-success">
								<?php echo $dad['desejo'];?>
								</div> 
								<label>endereco</label>
								<div class="form-group has-success">
								<?php echo $dad['endereco'];?>
								</div> 
								<label>cep</label>
								<div class="form-group has-success">
								<?php echo $dad['cep'];?>
								</div> 
								<label>cidades</label>
								<div class="form-group has-success">
								<?php echo $dad['cidade'];?>
								</div> 
								
								<!--<label>informacoes_validas</label>-->
								<!--<div class="form-group has-success">-->
								<!--<?php  //$dad['informacoes_validas'];?>-->
								<!--</div> -->
								
								

								<div class="form-group has-success">
								<label>Id Projeto</label>
								<?php echo $dad['id_projeto'];?>
								</div> 
								
								<?php
									}
								?>
							</div>
							</div>
</body>
</html>