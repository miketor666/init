<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: http://mikecomponents.com/php-projects/index.html");
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Keywords" content="">
        <meta name="author" content="Mike Espinoza">
		<title>Inicio</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
    </head>
	<body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Mi perfil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <p class="navbar-text navbar-right">Sesión iniciada como <a href="#" class="navbar-link"><?php echo $_SESSION['user']; ?></a> <a onclick="salir()" href="#">Salir</a></p>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>
		<div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/300x300" alt="Profile picture">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>This is my personal info.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            </div>            
		</div>
        <script src="js/loadUserInfo.js"></script>
	</body>
</html>