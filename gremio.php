<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon/logo.png">
    <title>GEMA | O Grêmio</title>
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
					  <li><a href="#">O Grêmio</a></li>
					  <li class="active">Sobre o Grêmio</li>
					</ol>
			<h3 align="left" class="page-header" style="margin-left: 10px; font-weight: bold;">O Grêmio</h1>
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">O que é o Grêmio Estudantil?</div>
						  <div class="panel-body">
							<p>
								Um Grêmio Estudantil é uma entidade sem fins lucrativos, e que visa a representação estudantil no ambiente em que se está inserido, em escolas, universidades, etc. Um grêmio visa solucionar e representar os interesses dos estudantes e lutar em conjunto com eles, pela educação e/ou outros assuntos que lhe forem cabíveis. 
							</p>
						  </div>
					  </div>
					</div>
					
					<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Como é realizada a votação para eleger o grêmio?</div>
						  <div class="panel-body">
							<p>
							A votação para a escolha da diretoria de um Grêmio, é realizada em algumas etapas, entre elas está a criação de uma comissão eleitoral, onde nela, será definido o edital e regras para a escolha da nova diretoria, a submissão de chapas para o pleito, a campanha, os debates, etc. Logo após, as chapas inscritas em regime de votação, são escolhidas pelo corpo estudantil, sendo todos os alunos da escola, votantes. 
							</p>
						  </div>
					  </div>
					</div>
					
					<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Quais eventos organizados pelo grêmio na atual gestão?</div>
						  <div class="panel-body">
							<p>
							<ul>
								<li>Enterro de semestre</li>
								<li>Semana De Meio Ambiente</li>
								<li>São João Interno</li>
								<li>Externo</li>
								<li>Rodas de conversas temáticas</li>
							</ul>
							</p>
						  </div>
					  </div>
					</div>
					
					<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">Quais as conquistas do grêmio durante o seu tempo de gestão?</div>
						  <div class="panel-body">
							<p>
							<ul>
								<li>Revitalizar o uso dos espaços desportivos</li>
								<li>Aquisição de micro-ondas e geladeira em apoio com a gestão do campus</li>
								<li>Organização estrutural do CRT</li>
								<li>Maior diálogo com a comunidade estudantil</li>
								<li>Plantio de mudas na Instituição</li>
								<li>Projetos em parceria com o Campus</li>
							</ul>
							</p>
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
