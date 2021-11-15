<?php
    include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>SportCenter 🏃🏻‍♂️⛹🏻‍♀️</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
        </nav>
</header>
<section>
    <div class="cajaimg ">
        <img src="img/hor.jpg" width="100%" height="400em">
    </div> 
    <br>
</section>
<section>
    <div class="container">
    
        <div class="row">
            <div class="col-md-8">
                <div class="jumbotron">
                    <h3>¿Qué ofrecemos?</h3>
                    <p>Ofrecemos un nuevo espacio para el deporte y el ocio de toda la familia. En un entorno privilegiado y con instalaciones inmejorables.</p> 
                </div>
            </div>
            
              <div class="col-md-4">
                <h3>Iniciar Sesión</h3>
                <form method="post" action="validar.php">
                    <div class="form-group">
                        <input
                            type="text"
                            name="usuario"
                            id="usuario"
                            placeholder="Ingrese nombre de usuario"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            name="contraseña"
                            id="contraseña"
                            placeholder="Ingrese su contraseña"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="submit"
                            value="iniciar sesion"
                            name="iniciar"
                            class="btn btn-primary form-control">
                    </div>
                    <div class="form-group">
                        <a href="registro.php" class="btn btn-success form-control">Regsitra Nuevo</a>
                    </div>
                </form>
        </div>
    </div>
</section>   
</body>