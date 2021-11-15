<?php
try {

    $db = new PDO('mysql:host=localhost;
    dbname=tallerwed007', 'root', '');
    // echo 'conexion estable 😁';

} catch (Exception $e) {

    die($e->getMessage());
}
