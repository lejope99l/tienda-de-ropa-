<?php    
    session_start();
    include 'conexion.php';
    if(isset($_SESSION['usuario'])){
        header('Content-Type: text/html; charset=utf-8');
    }
    else{
        echo '<script>alert("usted no esta registrado");</script>';
        echo '<script>window.location="index.php";</script>';
    }
?>

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
                            <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
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
<body>
<div>
    <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" height="500" src="img/01.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="500" src="img/02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="500" src="img/03.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="500" src="img/4slider.jpg" alt="Third slide">
                </div>
            </div>
            
            <!--Controles NEXT y PREV-->
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--Controles de indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            
        </div>
         
    </div>
    <div>
    <h2 class="text-center">Nuevo productos<h2>
    </div>
    <section class="cajon">
        <div class="container cards-inicio">
                <div class="card">
                <div class="liston"></div>
                <img src="img/chor.jpg" height="300" width="320">
                <h3>chorr</h3>
                <p>chorr deportivo</p>
                <a class="btn btn-success ca1 btn-sm" href="product-ven.php">ver más</a>
            </div>
        </div>
        <div class="container cards-inicio">
            <div class="card">
                <div class="liston"></div>
                <img src="img/buso.jpg"  height="300" width="320">
                <h3>buso</h3>
                <p>buso deportivo para calentamiento</p>
                <a href="#" class="btn btn-success btn-sm">ver más</a>
            </div>
        </div>
        <div class="container cards-inicio">
            <div class="card">
                <div class="liston"></div>
                <img src="img/zapatlla.jpg" height="300" width="320">
                <h3>Zapatilla</h3>
                <p>Zapatilla de deportivo</p>
                <a href="#" class="btn btn-success btn-sm">ver más</a>
            </div>
        </div>
    </section>
    <!--SECCION2-->
    <section class="secaj">
        <div class="caja2">
            <div class="container cards-inicio">
                <div class="card">
                    <div class="liston"></div>
                    <img src="img/polo02.jpg" height="300" width="320">
                    <h3>Polos de SPORT CENTE</h3>
                    <p>Polos de SPORT CENTER</p>
                    <a href="#" class="btn btn-success ca1 btn-sm">ver más</a>
                </div>
            </div>
            <div class="container cards-inicio">
                <div class="card">
                    <div class="liston"></div>
                        <img src="img/polo de mujer.jpg" height="300" width="320">
                        <h3>Polo para la mujer</h3>
                    <p>Polo de mujer</p>
                    <a href="#" class="btn btn-success btn-sm">ver más</a>
                </div>
            </div>
            <div class="container cards-inicio">
                <div class="card">
                    <div class="liston"></div>
                        <img src="img/chonpa.jpg" height="300" width="320">
                        <h3>chompa</h3>
                        <p>chompa para los deportista</p>
                        <a href="#" class="btn btn-success btn-sm">ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section>
    <div class="caja2">
            <div class="container cards-inicio">
                <div class="card">
                    <div class="liston"></div>
                    <img src="img/vivi.jpg" height="300" width="320">
                    <h3>Viviri negro</h3>
                    <p>Viviri reductor para ejercicios</p>
                    <a href="#" class="btn btn-success ca1 btn-sm">ver más</a>
                </div>
            </div>
            <div class="container cards-inicio">
                <div class="card">
                    <div class="liston"></div>
                        <img src="img/vivi.jpg" height="300" width="320">
                        <h3>Viviri negro</h3>
                        <p>Viviri reductor para ejercicios</p>
                    <a href="#" class="btn btn-success btn-sm">ver más</a>
                </div>
            </div>
            <div class="container cards-inicio">
                <div class="card">
                    <div class="liston"></div>
                        <img src="img/vivi.jpg" height="300" width="320">
                        <h3>Viviri negro</h3>
                        <p>Viviri reductor para ejercicios</p>
                        <a href="#" class="btn btn-success btn-sm">ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
   <?php
    include'footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>