<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon/logo.png">
    <title>GEMA | Grêmio Estudantil Madalena Antunes</title>
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
		<?php include("carousel.php"); ?>
		<?php include("destaque.php"); ?>
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
