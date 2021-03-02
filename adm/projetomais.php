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
			echo "<script>location.href='index.php';document.body.style.display='none';</script>";
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
		img{
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
		if(isset($_POST['editar'])){
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h5><label>Código:</label> <?php echo $_POST['id'];?></h5>
				<?php
					$table = mysqli_query($con, "SELECT * FROM `projetos` WHERE id_projeto='".$_POST['id']."'");
					while($produto = mysqli_fetch_array($table)){
				?>
				<p><label>Imagem:</label> <img src="<?php echo $produto['id_img'];?>"></p>
				<?php
					}
				?>
			</div>
			<div class="col-md-4">
		<form role="form" action="trocarprojeto.php" method="post" enctype="multipart/form-data">
		<?php
			$table = mysqli_query($con, "SELECT * FROM `projetos` WHERE id_projeto='".$_POST['id']."'");
			while($dad = mysqli_fetch_array($table)){
		?>
								<!--<div class="form-group">
									<label>Text Input</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control">
								</div>
								<div class="form-group checkbox">
									<label>
										<input type="checkbox">Remember me
									</label>
								</div>-->
								
								<label>Categoria</label>
								<div class="form-group has-success">
									<input class="form-control" name="categoria" value="<?php echo $dad['categoria'];?>" placeholder="ex: nome do produto" required="on">
								</div>
								
								<label>Titulo</label>
								<div class="form-group has-success">
									<input class="form-control" name="titulo" value="<?php echo $dad['titulo'];?>" placeholder="ex: nome do produto" required="on">
								</div>
								<label>Subtitulo</label>
								<div class="form-group has-success">
									<input class="form-control" name="subTitulo" value="<?php echo $dad['subTitulo'];?>" placeholder="ex: 100,00">
								</div>
								
								
								<div class="form-group">
									<label>Descrição</label>
									<textarea name="descricao" placeholder="descrição" class="form-control" rows="3"><?php echo $dad['descricao'];?></textarea>
								</div>
								
								<label>Criação</label>
								
								<div class="form-group has-success">
									<input class="form-control" name="create_time" value="<?php echo $dad['create_time'];?>" placeholder="detalhes1">
								</div>
								
								<!--<div class="form-group">
									<label>deseja trocar a imagem do produto?</label>
									<input type="file" name="img">
									<p class="help-block">Importando imagem.</p>
								</div>-->
								
								<input type="hidden" name="imagematual" required="on" value="<?php echo $dad['id_img'];?>">
								<input type="hidden" name="id" required="on" value="<?php echo $_POST['id'];?>">
								
									<!--<div class="form-group">
										<label>Checkboxes</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 1
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 2
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 3
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 4
											</label>
										</div>
									</div>-->
									<!--<div class="form-group">
										<label>Selects</label>
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
										</select>
									</div>-->
									<!--<div class="form-group">
										<label>Multiple Selects</label>
										<select multiple class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
										</select>
									</div>-->
									<button type="submit" name="sim" class="btn btn-primary">Salvar</button>
									<!--<button type="reset" class="btn btn-default">Reset Button</button>-->
								</div>
								<?php
									}
								?>
							</form>
							</div>
							</div>
							
<?php 

}else if(isset($_POST['excluir'])){

?>

	<div class="container">
		<div class="row">
				<div class="col-md-4"></div>
			<div class="col-md-4">
				<h2>Alerta</h2>
				<form action="excluirprojeto.php" method="post">
				<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Deseja mesmo excluir esse produto? <a href="index.php" class="pull-right"><em class="fa fa-lg fa-close"></em></a>
				<?php
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
}
?>



	<script src="js/bootstarp.js"></script>
</body>
</html>