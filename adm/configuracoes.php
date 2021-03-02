<?php 
// 		include('connection.php');
		session_start([
			'cookie_lifetime' => 86400,
			'read_and_close'  => true,
		]);
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

	<title>OrdTrace - adm</title>

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

			background: #eee;

		}

		.img-circle{

			width: 30px;

			height: 30px;

			background: #046;

		}

		button{

			border: none;

			background: transparent;

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

				<li class="active">configurações</li>

			</ol>	

		</div><!--/.row-->
		
		
	
		
		<div class="row">
		    <div class="col-lg-12">
				<h3>Panels</h3>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Default Panel
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Default Panel
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Default Panel
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
					</div>
				</div>
			</div>
		</div>
		
		
	
		
			<div class="col-md-12">

				<div class="panel panel-default ">

					<div class="panel-heading">

						Vantagens


						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>

					<div class="panel-body timeline-container">

						<ul class="timeline" style="list-style: none;">

							<li>

								<div class="timeline-badge"><em class="glyphicon glyphicon-pushpin"></em></div>

								<div class="timeline-panel">

									<div class="timeline-heading">

										<h4 class="timeline-title">Editavel</h4>

									</div>

									<div class="timeline-body">

										<p>---</p>

									</div>

								</div>

							</li>

							<li>

								<div class="timeline-badge primary"><em class="glyphicon glyphicon-link"></em></div>

								<div class="timeline-panel">

									<div class="timeline-heading">

										<h4 class="timeline-title">Seguro</h4>

									</div>

									<div class="timeline-body">

										<p>----</p>

									</div>

								</div>

							</li>

							<li>

								<div class="timeline-badge"><em class="glyphicon glyphicon-camera"></em></div>

								<div class="timeline-panel">

									<div class="timeline-heading">

										<h4 class="timeline-title">Fotos</h4>

									</div>

									<div class="timeline-body">

										<p>---</p>

									</div>

								</div>

							</li>

							<li>

								<div class="timeline-badge"><em class="glyphicon glyphicon-paperclip"></em></div>

								<div class="timeline-panel">

									<div class="timeline-heading">

										<h4 class="timeline-title">Arquivos</h4>

									</div>

									<div class="timeline-body">

										<p>---</p>

									</div>

								</div>

							</li>

						</ul>

					</div>

				</div>

			</div><!--/.col-->

		</div><!--/.row-->

	</div>	<!--/.main-->

	<?php require_once "estrutura/rodape.php"; ?>

		

</body>

</html>

