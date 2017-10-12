<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon/logo.png">
    <title>GEMA | Notícias</title>
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
		<!-- destaques -->
			<div class="row">
					<ol class="breadcrumb">
					  <li><a href="index.php">Início</a></li>
					  <li><a href="#">Notícias</a></li>
					  <li class="active">Publicadas</li>
					</ol>
				<h3 class="page-header" style="margin-left: 10px; font-weight: bold;">Notícias</h1>
					<!-- Noticias do sistema -->
					<a href="#" class="link">
					  <div class="col-md-2">
						<div class="thumbnail" style="margin-top: 20px;">
						  <img src="img/noticias/1.jpg" alt="..." >
						</div>
						</div>
						<div class="col-md-10">
						  <div class="caption">
							<h3>Vagas de estágios!</h3>
							<p>A prefeitura de Ceára-Mirim junto com o ifrn-cm, está disponibilizando 15 vagas de estágios para alunos do 3º e 4º ano do curso de Informática e manutenção de computadores.</p>
						  </div>
						</div>
					</a>
					
					<a href="#" class="link">
					  <div class="col-md-2">
						<div class="thumbnail" style="margin-top: 20px;">
						  <img src="img/noticias/2.png" alt="..." >
						</div>
						</div>
						<div class="col-md-10">
						  <div class="caption">
							<h3>Processo Selevtivo 2018.1</h3>
							<p>A prefeitura de Ceára-Mirim junto com o ifrn-cm, está disponibilizando 15 vagas de estágios para alunos do 3º e 4º ano do curso de Informática e manutenção de computadores.</p>
						  </div>
						</div>
					</a>
					
					<a href="#" class="link">
					  <div class="col-md-2">
						<div class="thumbnail" style="margin-top: 20px;">
						  <img src="img/noticias/3.png" alt="..." >
						</div>
						</div>
						<div class="col-md-10">
						  <div class="caption">
							<h3>Eleições para reitoria</h3>
							<p>A prefeitura de Ceára-Mirim junto com o ifrn-cm, está disponibilizando 15 vagas de estágios para alunos do 3º e 4º ano do curso de Informática e manutenção de computadores.</p>
						  </div>
						</div>
					</a>
					
					<a href="#" class="link">
					  <div class="col-md-2">
						<div class="thumbnail" style="margin-top: 20px;">
						  <img src="img/noticias/1.jpg" alt="..." >
						</div>
						</div>
						<div class="col-md-10">
						  <div class="caption">
							<h3>Vagas de estágios!</h3>
							<p>A prefeitura de Ceára-Mirim junto com o ifrn-cm, está disponibilizando 15 vagas de estágios para alunos do 3º e 4º ano do curso de Informática e manutenção de computadores.</p>
						  </div>
						</div>
					</a>
				  <nav class="text-center"aria-label="Page navigation">
					  <ul class="pagination pagination-sm">
						<li class="disabled">
						  <a href="#" aria-label="Previous">
							<span aria-hidden="true">Anterior</span>
						  </a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
						  <a href="#" aria-label="Next">
							<span aria-hidden="true">Proximo</span>
						  </a>
						</li>
					  </ul>
					</nav>
				  	  
			</div><br><br><br><br>
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
