<?php
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
	<title>Adicionar</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.img-responsive{
			background: rgba(10, 10, 10, .2);
		}
		.img-circle{
			width: 30px;
			height: 30px;
			background: #046;
		}
	</style>
</head>
<body>
<?php  
		// $var = 'https://'.$_SERVER['HTTP_HOST'];
		include('estrutura/cabecario.php');

		?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Editando</li>
			</ol>	
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-2">
				<h1 class="page-header">Adiciona</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<!--<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Buttons</div>
					<div class="panel-body">
						<div class="col-md-12">
							<h5>Small</h5>
							<button type="button" class="btn btn-sm btn-primary">Primary</button>
							<button type="button" class="btn btn-sm btn-default">Default</button>
							<button type="button" class="btn btn-sm btn-success">Success</button>
							<button type="button" class="btn btn-sm btn-info">Info</button>
							<button type="button" class="btn btn-sm btn-warning">Warning</button>
							<button type="button" class="btn btn-sm btn-danger">Danger</button>
							<button type="button" class="btn btn-sm btn-link">Link</button>
							<br />
							<br />
							<h5>Medium</h5>
							<button type="button" class="btn btn-md btn-primary">Primary</button>
							<button type="button" class="btn btn-md btn-default">Default</button>
							<button type="button" class="btn btn-md btn-success">Success</button>
							<button type="button" class="btn btn-md btn-info">Info</button>
							<button type="button" class="btn btn-md btn-warning">Warning</button>
							<button type="button" class="btn btn-md btn-danger">Danger</button>
							<button type="button" class="btn btn-md btn-link">Link</button>
							<br />
							<br />
							<h5>Large</h5>
							<button type="button" class="btn btn-lg btn-primary">Primary</button>
							<button type="button" class="btn btn-lg btn-default">Default</button>
							<button type="button" class="btn btn-lg btn-success">Success</button>
							<button type="button" class="btn btn-lg btn-info">Info</button>
							<button type="button" class="btn btn-lg btn-warning">Warning</button>
							<button type="button" class="btn btn-lg btn-danger">Danger</button>
							<button type="button" class="btn btn-lg btn-link">Link</button>
							<br />
							<br />
						</div>
					</div>
				</div> /.panel-->
				
				
				<div class="panel panel-default">
					<!--<div class="panel-heading">----</div>-->
					<div class="panel-body">
						<div class="col-md-12">
							<!-- <?php
								
							?> -->
							<form role="form" action="editaArquivoS.php" method="post" enctype="multipart/form-data">
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
									<input class="form-control" name="categoria" placeholder="ex: Limpeza" required="on">
								</div>
								
								<label>Titulo</label>
								<div class="form-group has-success">
									<input class="form-control" name="titulo" placeholder="ex: Prato" required="on">
								</div>
								<label>Subtiulo</label>
								<div class="form-group has-success">
									<input class="form-control" name="subtitulo" placeholder="ex: Subtitulo" required="on">
								</div>
							
								<!--<div class="form-group has-warning">
									<input class="form-control" placeholder="Warning" required="on">
								</div>
								<div class="form-group has-error">
									<input class="form-control" placeholder="Error" required="on">
								</div>-->
								
								<div class="form-group">
									<label>Descrição</label>
									<textarea name="descricao" placeholder="descrição" class="form-control" rows="3"></textarea>
								</div>
								
								<div class="form-group">
									<label>Texto</label>
									<textarea name="texto" placeholder="texto.." class="form-control" rows="3"></textarea>
								</div>
								
								<div class="form-group">
									<label>imagem</label>
									<input type="file" name="img" multiple="true" required="on">
									<p class="help-block">Importando imagem.</p>
								</div>
								
								</div>
								<div class="col-md-12">
										
									<button type="submit" name="enviar" class="btn btn-primary">Salvar</button>
									<!--<button type="reset" class="btn btn-default">Reset Button</button>-->
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<div class="col-sm-12">
				<p class="back-link">&copy; Empresa</p>
			</div>
		</div><!-- /.row -->
	</div><!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
