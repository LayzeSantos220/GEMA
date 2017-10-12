<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon/logo.png">
    <title>GEMA | A Gestão</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
		<?php include("menu.php"); ?>
		<div class="container">
			<div class="row">
					<ol class="breadcrumb">
					  <li><a href="index.php">Início</a></li>
					  <li><a href="#">Gestores</a></li>
					  <li class="active">Informações</li>
					</ol>
			<h3 align="left" class="page-header" style="margin-left: 10px; font-weight: bold;">A Gestão</h1>
				<div class="row">
					<div class="col-md-6">
						<img class="img-responsive center-block img-circle" src="img/gestao/1.jpg" width="150"/>
						<p style="text-align: center;"><b>João Gabriel Azevedo </b><br>Presidente</p>
					</div>
					<div class="col-md-6">
						<img class="img-responsive center-block img-circle" src="img/gestao/2.jpg" width="150"/>
						<p style="text-align: center;"><b>Brunna Karla </b><br>Vice Presidenta</p>
					</div>
				</div><!-- ./row -->
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/3.jpg" width="150"/>
						<p style="text-align: center;"><b>Jeconias Santos </b><br>Secretário Geral</p>
					</div>
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/4.jpg" width="150" height="100px" />
						<p style="text-align: center;"><b>Victória Arminda </b><br>1ª Secretáia</p>
					</div>
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/5.jpg" width="150"/>
						<p style="text-align: center;"><b>Pedro Paulo </b><br>Tesoureiro Geral</p>
					</div>
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/6.jpg" width="150"/>
						<p style="text-align: center;"><b>José Victor </b><br>1ª Tesoureiro</p>
					</div>
				</div><!-- ./row -->
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/7.jpg" width="150"/>
						<p style="text-align: center;"><b>Antônio Carlos </b><br>Eventos e Cultura</p>
					</div>
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/8.jpg" width="150"  />
						<p style="text-align: center;"><b>Camilla Oliveira </b><br>Assessoria de Comunicação </p>
					</div>
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/9.jpg" width="150"/>
						<p style="text-align: center;"><b>João Victor Marques </b><br>Diretor LGBT</p>
					</div>
					<div class="col-md-3">
						<img class="img-responsive center-block img-circle" src="img/gestao/10.jpg" width="150"/>
						<p style="text-align: center;"><b>Marcos Vitor </b><br>Relações Soció-Políticas</p>
					</div>
				</div><!-- ./row -->
				<div class="row">
					<div class="col-md-4">
						<img class="img-responsive center-block img-circle" src="img/gestao/11.jpg" width="130"/>
						<p style="text-align: center;"><b>Matheus Costa </b><br>Assessoria de Comunicação</p>
					</div>
					<div class="col-md-4">
						<img class="img-responsive center-block img-circle" src="img/gestao/12.jpg" width="150" />
						<p style="text-align: center;"><b>Ruana Martins </b><br>Planejamento</p>
					</div>
					<div class="col-md-4">
						<img class="img-responsive center-block img-circle" src="img/gestao/13.jpg" width="150" height="300" />
						<p style="text-align: center;"><b>JSarah Lima </b><br>Meio Ambiente</p>
					</div>
				</div><!-- ./row -->
					
					
				</div>
			<br><br><br><br>
		</div> <!-- /container -->
		<?php include("rodape.php"); ?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<script>
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		</script>
	
  </body>
</html>
