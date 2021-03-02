<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Ad</span>min</a>
				<ul class="nav navbar-top-links navbar-right" style="list-style: none;">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">1</span>
					</a>
						<ul class="dropdown-menu dropdown-messages" style="list-style: none;">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="img/person.png">
									</a>
									<div class="message-body"><small class="pull-right">1 min dez</small>
										<a href="#"><strong>EMPRESA</strong> Bem vinda <strong> ao seu sistema</strong>.</a>
									<br /><small class="text-muted"><!--1:24 pm - 25/03/2018--></small></div>
								</div>
							</li>
							
							<!--<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>-->
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">3</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts" style="list-style: none;">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 Nova Mensagem
									<span class="pull-right text-muted small"><!--3 mins ago--></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 0 Clicks
									<span class="pull-right text-muted small"><!--4 mins ago--></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 1 Usuario
									<span class="pull-right text-muted small"><!--4 mins ago--></span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="img/person.png"  class="img-responsive" alt="usuario">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php
					$dados = mysqli_query($con, "SELECT * FROM `user_adm`");
					while($dado = mysqli_fetch_array($dados)){
						echo $dado['username'];
					}
				?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
				<div class="divider"></div>
		<!--<form role="search" action="pesquisa.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="pesquisa..">
			</div>
		</form>-->
		<ul class="nav menu" style="list-style: none;">
			<li><a href="index.php"><em class="fa fa-home">&nbsp;</em>Home</a></li>
			<li><a href="usuarios.php"><em class="fa fa-user-circle">&nbsp;</em>Usúario</a></li>
			<li><a href="calendario.php"><em class="fa fa-calendar">&nbsp;</em>Calendario</a></li>
			<li><a href="estatisticas.php"><em class="fa fa-cube">&nbsp;</em>Estatísticas</a></li>
			<li><a href="configuracoes.php"><em class="fa fa-cogs">&nbsp;</em>Configurações</a></li>
			<li><a href="close.php"><em class="fa fa-power-off">&nbsp;</em> Sair</a></li>
		</ul>
	</div><!--/.sidebar-->