

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login do usuário</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	
  </head>
  <body>
    

	<div class="container">
		<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<form method="post" action="<?= base_url('user/login'); ?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			
			  <input type="submit" name="submit" value="logar" class="btn btn-default">
			</form>
			</div>
		</div>
	</div>
		<?php 
		
		if(isset($dados['error']) and $dados['error'] != null):
			echo $dados['error'];
		endif;

		 ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>