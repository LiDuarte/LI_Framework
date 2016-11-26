<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css"); ?>">
	<meta charset="UTF-8">
	
	<title>Li_Framework</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="well">
			
			<?php  echo $dados['nome']; ?>
			
			

				<div class="page-header">
				<h3 class="text-center text-danger">Welcome to LI Framework PHP</h3>
				</div>
			</div>
			<div class="panel-body">
				<ul class="list-group">
				  <li class="list-group-item text-info">Crie uma controller dentro do diretório <abbr title="attribute" class="text-danger">/application/controller/{nome da controller}</abbr></li>
				  <li class="list-group-item text-info">Application MVC</li>

				</ul>
			</div>
		</div>
	</div>


<style>
	*{
		margin: 5px;
	}
</style>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>