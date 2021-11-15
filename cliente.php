<?php 
  //incluir los archivos 
  //producto.entidad.php 
  //producto.model.php

  require_once 'cliente.entidad.php';
  require_once 'cliente.model.php';

  $alm = new Cliente();
  $model = new ClienteModel();

  if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']) {
        case 'actualizar':
            $alm->__SET('id',$_REQUEST['id']);
            $alm->__SET('nombre',$_REQUEST['nombre']);
            $alm->__SET('apellido',$_REQUEST['apellido']);
            $alm->__SET('celular',$_REQUEST['celular']);
            $alm->__SET('correo',$_REQUEST['correo']);
            $model->Actualizar($alm);
            header('Location: cliente.php');
            break;
        case 'registrar':
            $alm->__SET('id',$_REQUEST['id']);
            $alm->__SET('nombre',$_REQUEST['nombre']);
            $alm->__SET('apellido',$_REQUEST['apellido']);
            $alm->__SET('celular',$_REQUEST['celular']);
            $alm->__SET('correo',$_REQUEST['correo']);
            $model->Registrar($alm);
            header('Location: cliente.php');
            break;
        case 'eliminar':
            $model->Eliminar($_REQUEST['id']);
            header('Location: cliente.php');
            break;
        case 'editar':
            $alm = $model->Obtener($_REQUEST['id']);
            break;
    }
  }  
?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bievenidos</title>
     <!-- link bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- script -->
    <script src="js/boostrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Módulo Clientes🙋🏻‍♂️🙋🏻‍♀️</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <form action="?action=<?php echo $alm->id ?'actualizar':'registrar'; ?>" method="post">
                    <fieldset class=form-group">
                        <input type="hidden" 
                            name="id"
                            value="<?php echo $alm->__GET('id'); ?>">
                        <br>
                        <input type="text" 
                            name="nombre" 
                            id="nombre"
                            value="<?php echo $alm->__GET('nombre'); ?>"
                            class="form-control"
                            placeholder="Nombre del cliente">
                        <br>
                        <input type="text" 
                            name="apellido" 
                            id="apellido"
                            value="<?php echo $alm->__GET('apellido'); ?>"
                            class="form-control"
                            placeholder="Apellido">  
                        <br>
                        <input type="num" 
                            name="celular" 
                            id="celular"
                            value="<?php echo $alm->__GET('celular'); ?>"
                            class="form-control"
                            placeholder="Celular">  
                        <br>
                        <input type="text" 
                            name="correo" 
                            id="correo"
                            value="<?php echo $alm->__GET('correo'); ?>"
                            class="form-control"
                            placeholder="Correo"> 

                    </fieldset>
                    
                    <input type="submit" value="Añadir" class="btn btn-primary form-control">
                    
                         <br/>
                         
                        <a href="panel.php" class="btn btn-success form-control">
                                ir al atrar
                            </a>
                           

                </form>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h2 class="text-center">Registro🧗🏻‍♀️</h2>
                </header>

                <table class="table table-condensed"> 
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($model->Listar() as $r): 
                    ?>
                    <tr>
                        <td>
                            <?php echo $r->__GET('id'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('nombre'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('apellido'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('celular'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('correo'); ?>
                        </td>
                        <td>
                            <a href="?action=editar&id=<?php echo $r->id; ?>">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="?action=eliminar&id=<?php echo $r->id; ?>">
                                Eliminar
                            </a>                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>