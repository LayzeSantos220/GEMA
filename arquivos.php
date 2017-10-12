<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon/logo.png">
    <title>GEMA | Arquivos</title>
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
					  <li><a href="#">Arquivos</a></li>
					  <li class="active">Arquivos publicados</li>
					</ol>
			<h3 class="page-header" style="margin-left: 10px; font-weight: bold;">Arquivos</h1>
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Estatuto do Grêmio Estudantil Madalena Antunes - IFRN/CM</div>
					  <div class="panel-body">
						<p><strong>Nome:</strong> Estatuto do Grêmio / 2017 </p>
						<p><strong>Tamanho:</strong> <?php echo filesize('arquivos/estatuto.doc').' Bytes'; ?></p>
						<a href="arquivos/estatuto.doc" class="btn btn-sm btn-success">Baixar <span class="glyphicon glyphicon-download"></span></a>
					  </div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Normas Eleitorais - GEMA - 2017</div>
					  <div class="panel-body">
						<p><strong>Nome:</strong> Normas Eleitorais do Grêmio Estudantil  / 2017 </p>
						<p><strong>Tamanho:</strong> <?php echo filesize('arquivos/normas.docx').' Bytes'; ?></p>
						<a href="arquivos/normas.docx" class="btn btn-sm btn-success">Baixar <span class="glyphicon glyphicon-download"></span></a>
					  </div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Relatório de Finanças 001/2017</div>
					  <div class="panel-body">
						<p><strong>Nome:</strong> Relatório de Finanças 1º Semestre  / 2017 </p>
						<p><strong>Tamanho:</strong> <?php echo filesize('arquivos/relatorio.docx').' Bytes'; ?></p>
						<a href="arquivos/relatorio.docx" class="btn btn-sm btn-success">Baixar <span class="glyphicon glyphicon-download"></span></a>
					  </div>
					</div>
				</div>
			</div>
			<nav class="text-center"aria-label="Page navigation">
					  <ul class="pagination pagination-sm">
						<li class="disabled">
						  <a href="#" aria-label="Previous">
							<span aria-hidden="true">Anterior</span>
						  </a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li>
						  <a href="#" aria-label="Next">
							<span aria-hidden="true">Proximo</span>
						  </a>
						</li>
					  </ul>
					</nav>
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
