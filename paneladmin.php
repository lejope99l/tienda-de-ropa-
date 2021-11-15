<?php
session_start();
include 'conexion.php';
if (isset($_SESSION['usuario'])) {
    header('Content-Type: text/html; charset=utf-8');
} else {
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
    <title>Panel del administrador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/persanal.css">
    <script src="js/bootstrap.min.js"></script>
    <script>
        function calculoImc() {
            var vPeso, vEstatura, vImc;
            vPeso = 0;
            vEstatura = 0;
            vImc = 0;

            vPeso = document.getElementById("peso").value;
            vEstatura = document.getElementById("estatura").value / 100;
            vImc = vPeso / (vEstatura * vEstatura);
            //document.getElementById("resultado_imc").value=vImc;
            //document.getElementById("resultado1").innerHTML=vImc;
            alert(vImc);
        }

        function calculoPms() {
            var vSoles, vdolar, vImc;
            vSoles = 0;
            vdolar = 3.5;
            vPms = 0;

            vSoles = document.getElementById("Soles").value;
            vdolar = document.getElementById("dolar").value;
            vIPms = vSoles /vPms;
            //document.getElementById("resultado_imc").value=vImc;
            //document.getElementById("resultado1").innerHTML=vImc;
            alert(vPms);
        }
    </script>

</head>

<body style="background:skyblue;">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        Senati😎😎
                    </h1>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="img/logo-senati2.jpg" alt="Logo Senati" class="rounded">
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center">
                    Panel del administrador
                    </h2>
                    <h4 class="text-center">
                        <?php
                        echo 'Bienvenido🤩🤩, <strong>' . $_SESSION['usuario'] . '</strong>';
                        ?>
                    </h4>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="img/editarperfil.jpg" alt="editar perfil" class="img-fluid" style="width:180px; height:180px;">
                        <br>
                        <a href="#">
                            Editar Perfil
                        </a>
                        <br>
                        <a href="logout.php" class="btn btn-info">
                            Cerrar sesión
                        </a>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/productos.png" alt="productos" class="img-fluid rounded-circle img-thumbnail">
                    <a href="producto.php" class="btn btn-secondary form-control text-center">
                        Módulo Productos
                    </a>

                </div>
                <div class="col-md-4">
                    <img src="img/clientes.jpg" alt="clientes" class="img-fluid rounded-circle img-thumbnail">
                    <a href="cliente.php" class="btn btn-success form-control text-center">
                        Módulo Clientes
                    </a>
                </div>
                <div class="col-md-4">
                    <img src="img/usuario.jpg" alt="clientes" class="img-fluid rounded-circle img-thumbnail">
                    <a href="registro.php" class="btn btn-success form-control text-center">
                     Módulo usuario
                    </a>

                </div>
            </div>
            <!-- Seccion de utilidades -->
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">
                        Utilidades para el usuario
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-center">
                        Calculo del IMC
                    </h5>
                    <form name="f1" id="f1" action="">
                        <div class="form-group">
                            <input type="text" name="" id="peso" placeholder="Indique su peso en kilogramos" required class="form-control">
                            <input type="text" name="" id="estatura" placeholder="Indique su estatura en centimetros" required class="form-control">
                        </div>
                        <button class="btn btn-primary" onClick="calculoImc();">
                            Calcular IMC
                        </button>
                        <!--
                        <div class="form-group">
                            <input type="text" 
                                name="" 
                                id="resultado_imc" 
                                placeholder="0.00"                                
                                class="form-control">                            
                        </div>
                        -->
                        <!--
                        <div id="resultado1">
                        </div>
                        -->
                    </form>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">
                        Calculo de Tipo de cambio
                    </h5>
                    <div class="form-group">
                        <input type="text" name="" id="Soles" placeholder="indique el monto de soles" required class="form-control">
                        <input type="text" name="" id="dolar" placeholder="indique el monto de dolares" required class="form-control">
                    </div>
                    <button class="btn btn-primary" onClick="calculoPms();">
                        calcular el tipo de cambio
                    </button>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">
                        Recomendaciones
                    </h5>
                    <div class="form-group">
                        <input type="text" name="" id="peso" placeholder="asunto" required class="form-control">
                        <input type="text" name="" id="estatura" placeholder="mensaje" required class="form-control">
                    </div>
                    <button class="btn btn-primary" onClick="calculoImc();">
                        enviar comentario
                    </button>
                </div>
            </div>
        </div>
    </header>
</body>

</html>