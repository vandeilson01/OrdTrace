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
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datas</title>
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
<?php  		// $var = 'https://'.$_SERVER['HTTP_HOST'];
		include('estrutura/cabecario.php');

		?>
			
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Estatísticas</li>
			</ol>	
		</div><!--/.row-->
		
		
		<!--Porcentual-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Porcetual</h1>
				<h4 class="page-header">pela meta 100</h4>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
					    <?php
							$dad = mysqli_query($con, "SELECT * FROM `solicitacao` ORDER BY `id_solicitacoes` DESC limit 1") or die('erro');

							while($dado = mysqli_fetch_array($dad)){
							    
						?>
							<?php $equals = ($dado['id_solicitacoes']/100) * 100;
							?>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $equals; ?>" ><span class="percent">
						      <?php echo $equals; ?>
						  </span></div>
						    <?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
					 <?php
							$dad = mysqli_query($con, "SELECT * FROM `depoimento` ORDER BY `id_depoimento` DESC limit 1") or die('erro');

							while($dado = mysqli_fetch_array($dad)){
							    
						?>
							<?php $equals = ($dado['id_depoimento']/100) * 100;
							?>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $equals; ?>" ><span class="percent">
						      <?php echo $equals; ?>
						  </span></div>
						    <?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						 <?php
							$dad = mysqli_query($con, "SELECT * FROM `user_adm` ORDER BY `id_adm` DESC limit 1") or die('erro');

							while($dado = mysqli_fetch_array($dad)){
							    
						?>
							<?php $equals = ($dado['id_adm']/100) * 100;
							?>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo $equals; ?>" ><span class="percent">
						      <?php echo $equals; ?>
						  </span></div>
						    <?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
					     <?php
							$dad = mysqli_query($con, "SELECT * FROM `historico` ORDER BY `id_historico` DESC limit 1") or die('erro');

							while($dado = mysqli_fetch_array($dad)){
							    
						?>
							<?php $equals = ($dado['id_historico']/100) * 100;
							?>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $equals; ?>" ><span class="percent">
						      <?php echo $equals; ?>
						  </span></div>
						    <?php
							}
						?>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Gráfico Mensal
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Porcentual em pilha
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="col-md-12 no-padding">
							<div class="row progress-labels">
								<div class="col-sm-6">New Orders</div>
								<div class="col-sm-6" style="text-align: right;">80%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 80%;" class="progress-bar progress-bar-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row progress-labels">
								<div class="col-sm-6">Comments</div>
								<div class="col-sm-6" style="text-align: right;">60%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 60%;" class="progress-bar progress-bar-orange" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row progress-labels">
								<div class="col-sm-6">New Users</div>
								<div class="col-sm-6" style="text-align: right;">40%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 40%;" class="progress-bar progress-bar-teal" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row progress-labels">
								<div class="col-sm-6">Page Views</div>
								<div class="col-sm-6" style="text-align: right;">20%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 20%;" class="progress-bar progress-bar-red" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			    <div class="panel panel-danger">
					<div class="panel-heading">Aletas de ameaças
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<p>Sem ameaças.</p>
					</div>
				</div>
			</div>
		</div><!--/.row-->
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	<?php require_once "estrutura/rodape.php"; ?>

<script>

//  var a = document.querySelector('tbody tr td[class=day]');
//  var da = new Date().getDate();
//  alert(a.textContent);
//  if(a.textContent() === da){
// 	 alert(a);
//  }


	
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};



</script>	
</body>
</html>
