
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="panel.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">CONTACTANOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light btn-sm" href="logout.php" style="color:black;">CERRAR SESIÓN</a>
                        </li>
                    </ul>
                </div>
        </nav>
        
    </header>

<div class="container-fluid p-0 mb-5 ">
    <div class="palaxIn" > 
        <div class="container py-lg-3 py-2">
            <div class="row">                         
                 <nav class="navbar navbar-expand nav-1">
                <ul class="navbar-nav">
                <h2 class="pt-4 text-white text-center font-weight-bold">CONTÁCTANOS PARA AYUDARTE</h2>
            </div>
            
        </div>
     </div>
<div>

<section class="container">
            <div class="row">
                <div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">
                    <form class="contact-form-wrapper" data-toggle="validator" action="app/send-message.php" method="POST" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pt-4 form-group">
                                    <label for="inputName">Nombres y apellidos <span class="font10 text-danger">(requerido)</span></label>
                                    <input id="inputName" name="fullname" type="text" class=" form-control" data-error="Tu nombre es obligatorio" required>
                                    <div class="help-block with-errors"></div>
                                </div> 
                            </div>
                                <div class="col-sm-6">
                                    <div class="pt-4 form-group">
                                        <label for="inputEmail">Tu Correo Electrónico <span class="font10 text-danger">(requerido)</span></label>
                                        <input id="inputEmail" name="email" type="email" class="form-control" data-error="Tu correo es obligatorio y verificado por Correo Electrónico" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputMessage">Mensaje <span class="font10 text-danger">(requerido)</span></label>
                                        <textarea id="inputMessage" name="message" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                </div>
                        </div>    
                    </form>
                        
                </div>
                <body style="background:skyblue;">
                <div class=" sa col-md-4">
                    <p class="colo pt-4 font-weight-bold">Dirección</p>
                    <div>
                        <p class="brr">Lima,Perú</p>
                    </div>
                    <div>
                       <p class="colo font-weight-bold">Correo Electrónico</p>
                       <p class= "brr">SportCenter@gmail.com</p>
                    </div>

                    <div>
                       <p class="colo font-weight-bold">Teléfono</p>
                       <p class=" brr">915244321</p>
                    </div>

                    <div>
                       <p class="colo font-weight-bold">Redes Sociales</p>
                    </div>
                    <div class="pt-3 d-flex justify-content-start">
					    <ul class="social-icons margin-top-20 nav">
				            <li class="ml-auto facebook4">
                                <a class="nav-link"  href="#"><i class="fab fa-facebook-f"></i></a>
						    </li>
						    <li class="twitter4">
                                <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="instagram4">
                                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="google-plus4">
                                <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="linkendin4">
                                <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
						    <space>
                        </ul>
                    </div>                      
                </div>
            </div>   
</section>
<a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
<?php
include'footer.php';
?>
