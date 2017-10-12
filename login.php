<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon/logo.png">
    <title>GEMA | Login</title>
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
					  <li><a href="#">Administração</a></li>
					  <li class="active">Login</li>
					</ol>
			<h3 align="center" class="page-header" style="margin-left: 10px; font-weight: bold;">Acesso Restrito</h1>
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Efetur o Login</div>
						  <div class="panel-body">
							<form name="form" action="" method="post">
								<div class="input-group input-group-md">
								  <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-user"></i></span>
								  <input type="text" class="form-control" placeholder="Digite o seu login..." aria-describedby="sizing-addon3" autofocus required>
								</div><br>
								<div class="input-group input-group-md">
								  <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-lock"></i></span>
								  <input type="password" class="form-control" placeholder="Digite o sua senha..." aria-describedby="sizing-addon3" required>
								</div><br>
								<button class="btn btn-md btn-block btn-primary"><i class="fa fa-send"></i> Entrar</button>
							</form>
						  </div>
					  </div>
					</div>
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
