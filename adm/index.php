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

				<li class="active">Editando</li>

			</ol>	

		</div><!--/.row-->
		
		
		
		<div class="col-lg-12">
			<h1 class="page-header">Geral</h1>
	    </div>

		<div class="panel panel-container pt-5">
			<div class="row">
			    
			    
			
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">

					<div class="panel panel-teal panel-widget border-right">

						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>

						<?php
							$dad = mysqli_query($con, "SELECT * FROM `solicitacao` ORDER BY `id_solicitacoes` DESC limit 1") or die('erro');

							while($dado = mysqli_fetch_array($dad)){
						?>
							<div class="large"><?php echo $dado['id_solicitacoes'];?></div>
						<?php
							}
						?>

							<div class="text-muted">Solicitações</div>

						</div>

					</div>

				</div>


				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">

					<div class="panel panel-blue panel-widget border-right">

						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>

							<?php
    							$dad = mysqli_query($con, "SELECT * FROM `depoimento` ORDER BY `id_depoimento` DESC limit 1") or die('erro');

							    while($dado = mysqli_fetch_array($dad)){
						    ?>
	    						<div class="large"><?php echo $dado['id_depoimento'];?></div>
		    				<?php
			    				}
				    		?>

							<div class="text-muted">Comentarios</div>

						</div>

					</div>

				</div>

				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">

					<div class="panel panel-orange panel-widget border-right">

						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
						<?php
							$dad = mysqli_query($con, "SELECT * FROM `user_adm` ORDER BY `id_adm` ASC limit 1");

							while($dado = mysqli_fetch_array($dad)){
						?>
							<div class="large"><?php echo $dado['id_adm']?></div>
						<?php
							}
						?>
							<div class="text-muted">Usuarios</div>

						</div>

					</div>

				</div>

				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">

					<div class="panel panel-red panel-widget ">

						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
						
						<?php
							$dad = mysqli_query($con, "SELECT * FROM `historico` ORDER BY `id_historico` ASC limit 1");

							while($dado = mysqli_fetch_array($dad)){
						?>
							<div class="large"><?php echo $dado['id_historico']?></div>
						<?php
							}
						?>


							<div class="text-muted">Cliks</div>

						</div>

					</div>

				</div>

			</div><!--/.row-->

		</div>
		

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

			<div class="col-md-12">

				<div class="panel panel-default chat">

					<div class="panel-heading">

						Comentários

						<ul class="pull-right panel-settings panel-button-tab-right" style="list-style: none;">

							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
 
								<em class="fa fa-cogs"></em>

							</a>

								<ul class="dropdown-menu dropdown-menu-right" style="list-style: none;">

									<li>

										<ul class="dropdown-settings" style="list-style: none;">

											<li><a href="#">

												<em class="fa fa-reply-all"></em> Todos

											</a></li>

										</ul>

									</li>

								</ul>

							</li>

						</ul>

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>

					<div class="panel-body">

						<ul style="list-style: none;">
						    <?php
						    	$dad = mysqli_query($con, "SELECT * FROM `depoimento`");

											while($dado = mysqli_fetch_array($dad)){

												echo '


							<li class="right clearfix"><span class="chat-img pull-right">

								<img src="'.$dado['img_autor'].'" alt="'.$dado['autor'].'" class="img-circle" />

								</span>

								<div class="chat-body clearfix">

									<div class="header"><strong class="pull-left primary-font">'.$dado['autor'].'</strong> <small class="text-muted">'.$dado['create_time'].'</small></div>
									

									<p>'.$dado['texto'].'</p>

								</div>

							</li>  ';
							}
                                    ?>

						</ul>

					</div>

					<div class="panel-footer">
					
					</div>
					
					
				</div>
				
					<div class="panel panel-default">
					<div class="panel-heading">
						Comentar
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
							<form action="comentarios.php" method="post" enctype="multipart/form-data">
							<fieldset>
							    <!-- File input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Img</label>
									<div class="col-md-9">
										<input type="file" name="img" id="img" class="form-control input-md" placeholder="img" />
									</div>
								</div>
								
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									<div class="col-md-9">
										<input  type="text" name="autor" class="form-control input-md" placeholder="autor" />
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Comentário</label>
									<div class="col-md-9">
										<textarea class="form-control" name="texto" placeholder="Comentário..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Enviar</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			

				<div class="panel panel-default">

					<div class="panel-heading">

						Projetos

						<ul class="pull-right panel-settings panel-button-tab-right">

							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">

								<em class="fa fa-cogs"></em>

							</a>

								<ul class="dropdown-menu dropdown-menu-right" style="list-style: none;">

									<li>

										<ul class="dropdown-settings" style="list-style: none;">

											<li><a href="adicionarprojetos.php" style="color:#000000" class="btn btn-dark">

												<em class="fa fa-pencil"></em> Novo Projeto

											</a></li>

										</ul>

									</li>

								</ul>

							</li>

						</ul>

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>

					<div class="panel-body">

						<ul class="todo-list" style="list-style: none;">

									<?php

								// 		$tabelas = array("solucoes");

								// 		$tabela =0;

								// 		for($tabela<=1;$tabela<count($tabelas); $tabela++){

										$dad = mysqli_query($con, "SELECT * FROM `projetos`");

											while($dado = mysqli_fetch_array($dad)){

												

												echo '
												<li class="todo-list-item mt-5 mb-5">

												<form action="projetomais.php" method="post">

												

												<div class="checkbox">

													<input type="checkbox" name="'.$dado['id_projeto'].'" id="'.$dado['id_projeto'].'" />

													<label for="'.$dado['id_projeto'].'">';

												echo $dado['titulo'];

												echo '<input type="hidden" name="id" value="'.$dado['id_projeto'].'">';

												// echo '<input type="hidden" name="esp" value="'.$dado['esp'].'">';

												echo '</label>

												</div>

												<button type="submit" name="excluir" class="pull-right action-buttons"><a class="trash">

													<em class="fa fa-trash"></em>

												</a></button>
												
												
												<button type="submit" name="editar" class="action-buttons pull-right">
												    <a class="trash">
												        <i style="color: #000000;" class="fa fa-pencil-square-o"></i>
												    </a>
												</button>
												
												</form>

											

											';

											

											?>

											<?php

											echo '</li>';

											}

								// 		}

							?>

						</ul>

					</div>

					<div class="panel-footer text-center">

						<div class="input-group text-center">
			
        
        		        </div>

					</div>

				</div>

			</div>

		</div>
		
		
		
		<div class="panel panel-default">

					<div class="panel-heading">

						Soluções

						<ul class="pull-right panel-settings panel-button-tab-right">

							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">

								<em class="fa fa-cogs"></em>

							</a>

								<ul class="dropdown-menu dropdown-menu-right" style="list-style: none;">

									<li>

										<ul class="dropdown-settings" style="list-style: none;">

											<li><a href="adicionarsolucao.php" style="color:#000000" class="btn btn-dark">

												<em class="fa fa-pencil"></em> Nova Solução

											</a></li>

										</ul>

									</li>

								</ul>

							</li>

						</ul>

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>

					<div class="panel-body">

						<ul class="todo-list" style="list-style: none;">

									<?php

								// 		$tabelas = array("solucoes");

								// 		$tabela =0;

								// 		for($tabela<=1;$tabela<count($tabelas); $tabela++){

										$dad = mysqli_query($con, "SELECT * FROM `solucoes`");

											while($dado = mysqli_fetch_array($dad)){

												

												echo '
												<li class="todo-list-item mt-5 mb-5">

												<form action="solucoesmais.php" method="post">

												

												<div class="checkbox">

													<input type="checkbox" name="'.$dado['id_solucoes'].'" id="'.$dado['id_solucoes'].'" />

													<label for="'.$dado['id_solucoes'].'">';

												echo $dado['titulo'];

												echo '<input type="hidden" name="id" value="'.$dado['id_solucoes'].'">';

												// echo '<input type="hidden" name="esp" value="'.$dado['esp'].'">';

												echo '</label>

												</div>

												<button type="submit" name="excluir" class="pull-right action-buttons"><a class="trash">

													<em class="fa fa-trash"></em>

												</a></button>
												
												
												<button type="submit" name="editar" class="action-buttons pull-right">
												    <a class="trash">
												        <i style="color: #000000;" class="fa fa-pencil-square-o"></i>
												    </a>
												</button>
												
												</form>

											

											';

											

											?>

											<?php

											echo '</li>';

											}

								// 		}

							?>

						</ul>

					</div>

					<div class="panel-footer text-center">

						<div class="input-group text-center">
			
        
        		        </div>

					</div>

				</div>
				
				
					<div class="panel panel-default">

					<div class="panel-heading">

						Blog

						<ul class="pull-right panel-settings panel-button-tab-right">

							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">

								<em class="fa fa-cogs"></em>

							</a>

								<ul class="dropdown-menu dropdown-menu-right" style="list-style: none;">

									<li>

										<ul class="dropdown-settings" style="list-style: none;">

											<li><a href="adicionarnews.php" style="color:#000000" class="btn btn-dark">

												<em class="fa fa-pencil"></em> Nova Notícia

											</a></li>

										</ul>

									</li>

								</ul>

							</li>

						</ul>

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>

					<div class="panel-body">

						<ul class="todo-list" style="list-style: none;">

									<?php

								// 		$tabelas = array("solucoes");

								// 		$tabela =0;

								// 		for($tabela<=1;$tabela<count($tabelas); $tabela++){

										$dad = mysqli_query($con, "SELECT * FROM `news`");

											while($dado = mysqli_fetch_array($dad)){

												

												echo '
												<li class="todo-list-item mt-5 mb-5">

												<form action="newsmais.php" method="post">

												

												<div class="checkbox">

													<input type="checkbox" name="'.$dado['id_news'].'" id="'.$dado['id_news'].'" />

													<label for="'.$dado['id_news'].'">';

												echo $dado['titulo'];

												echo '<input type="hidden" name="id" value="'.$dado['id_news'].'">';

												// echo '<input type="hidden" name="esp" value="'.$dado['esp'].'">';

												echo '</label>

												</div>

												<button type="submit" name="excluir" class="pull-right action-buttons"><a class="trash">

													<em class="fa fa-trash"></em>

												</a></button>
												
												
												<button type="submit" name="editar" class="action-buttons pull-right">
												    <a class="trash">
												        <i style="color: #000000;" class="fa fa-pencil-square-o"></i>
												    </a>
												</button>
												
												</form>

											

											';

											

											?>

											<?php

											echo '</li>';

											}

								// 		}

							?>

						</ul>

					</div>

					<div class="panel-footer text-center">

						<div class="input-group text-center">
			
        
        		        </div>

					</div>

				</div>

			

		
		
		
		
		<div class="row">
		    <div class="col-lg-12">
				<h2>Panels</h2>
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
		
		
			<div class="row">
			    
			<div class="col-md-12">

				<div class="panel panel-default chat">				

				<div class="panel panel-default">

					<div class="panel-heading">

						Solicitações
						
						<ul class="pull-right panel-settings panel-button-tab-right">

							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">

								<em class="fa fa-cogs"></em>

							</a>

								<ul class="dropdown-menu dropdown-menu-right" style="list-style: none;">

									<li>

										<ul class="dropdown-settings" style="list-style: none;">

											<li><a href="adicionarsolucao.php" style="color:#000000" class="btn btn-dark">

												<em class="fa fa-pencil"></em> Nova Solução

											</a></li>

										</ul>

									</li>

								</ul>

							</li>

						</ul>

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>

					<div class="panel-body">

						<ul class="todo-list" style="list-style: none;">

						

									<?php

										$dad = mysqli_query($con, "SELECT * FROM `solicitacao`");

											while($dado = mysqli_fetch_array($dad)){

												echo '
													<form action="verprojeto.php" method="post">

												<li class="todo-list-item">

												<div class="checkbox">

													<input type="checkbox" name="'.$dado['id_solicitacoes'].'" id="'.$dado['id_solicitacoes'].'" />

													<label for="'.$dado['id_solicitacoes'].'">';

												echo $dado['desejo'];

											
												echo '
												<input type="hidden" name="nome" value="'.$dado['nome'].'">';
												
												echo '<input type="hidden" name="id" value="'.$dado['id_solicitacoes'].'">';
												
												echo '<input type="hidden" name="id_projeto" value="'.$dado['id_projeto'].'">';

												echo '</label>

												</div>

												<button type="submit" class="pull-right action-buttons" name="sim"><a class="trash">

													<em class="fa fa-info"></em>

												</a></button>

											</li>
											
												</form>';

											}	

							?>

						



						</ul>

					</div>

					<div class="panel-footer text-center">

					
				</div>

			</div><!--/.col-->
			</div><!--/.col-->
			</div><!--/.col-->
			
		
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

