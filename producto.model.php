<?php
    class ProductoModel{
        // atributo pdo
        private $pdo;
        // metodo constructor
        public function __CONSTRUCT(){
            try {
                // Cadena de conexion
                // localhost, tallerweb, root, sin clave
                $this->pdo = new PDO('mysql:host=localhost;dbname=tallerwed007','root','');
                // configuracion de errores
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                // se ejecuta cada vez que encuentre errores dentro del try
                die($e->getMessage());
            }
        }
        // final del metodo constructor

        // metodo listar
        public function Listar(){
            try {
                // variable array result
                $result = array();
                // variable stm orden sql
                $stm = $this->pdo->prepare("select * from productos");
                // ejecutar la consulta
                $stm->execute();
                // recorrido por todos los registros
                foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                    // nueva instancia de producto
                    $alm = new producto();
                    $alm->__SET('idproducto',$r->idproducto);
                    $alm->__SET('nombre',$r->nombre);
                    $alm->__SET('precio',$r->precio);
                    $alm->__SET('stock',$r->stock);
                    $result[]= $alm;
                }
                // retorna una lista de los registros leidos
                return $result;

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // final metodo listar

        // metodo obtener
        public function Obtener($cod){
            try {
                // variable stm orden sql
                $stm = $this->pdo->prepare("select * from productos where idproducto = ?");
                // se ejecuta la consulta con un parametro
                $stm->execute(array($cod));
                // lee la consulta y devuelve un resultado a r
                $r = $stm->fetch(PDO::FETCH_OBJ);
                // nueva instancia de producto
                $alm = new producto();
                $alm->__SET('idproducto',$r->idproducto);
                $alm->__SET('nombre',$r->nombre);
                $alm->__SET('precio',$r->precio);
                $alm->__SET('stock',$r->stock);
                return $alm;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        //final metodo obtener

        //metodo eliminar
        public function Eliminar($cod){
            try {
                // variable stm orden sql
                $stm = $this->pdo->prepare("delete from productos where idproducto = ?");
                // se ejecuta la consulta con un parametro
                $stm->execute(array($cod));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // metodo actualizar
        public function Actualizar(producto $data){
            try {
                //variable string sql
                $sql = "update productos set
                nombre=?,
                precio=?,
                stock=?
                where idproducto=?";

                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('nombre'),
                    $data->__GET('precio'),
                    $data->__GET('stock'),
                    $data->__GET('idproducto')
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // final metodo actualizar

        // metodo registrar
        public function Registrar(producto $data){
            try {
                $sql = "insert into productos(nombre,precio,stock) values (?,?,?)";
                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('nombre'),
                    $data->__GET('precio'),
                    $data->__GET('stock')                    
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>