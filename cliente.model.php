<?php
    class ClienteModel{
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
                $stm = $this->pdo->prepare("select * from clientes");
                // ejecutar la consulta
                $stm->execute();
                // recorrido por todos los registros
                foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                    // nueva instancia de producto
                    $alm = new Cliente();
                    $alm->__SET('id',$r->id);
                    $alm->__SET('nombre',$r->nombre);
                    $alm->__SET('apellido',$r->apellido);
                    $alm->__SET('celular',$r->celular);
                    $alm->__SET('correo',$r->correo);
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
                $stm = $this->pdo->prepare("select * from clientes where id = ?");
                // se ejecuta la consulta con un parametro
                $stm->execute(array($cod));
                // lee la consulta y devuelve un resultado a r
                $r = $stm->fetch(PDO::FETCH_OBJ);
                // nueva instancia de producto
                $alm = new Cliente();
                $alm->__SET('id',$r->id);
                $alm->__SET('nombre',$r->nombre);
                $alm->__SET('apellido',$r->apellido);
                $alm->__SET('celular',$r->celular);
                $alm->__SET('correo',$r->correo);
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
                $stm = $this->pdo->prepare("delete from clientes where id = ?");
                // se ejecuta la consulta con un parametro
                $stm->execute(array($cod));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // metodo actualizar
        public function Actualizar(Cliente $data){
            try {
                //variable string sql
                $sql = "update clientes set
                nombre=?,
                apellido=?,
                celular=?,
                correo=?
                where id=?";

                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('nombre'),
                    $data->__GET('apellido'),
                    $data->__GET('celular'),
                    $data->__GET('correo'),
                    $data->__GET('id')
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // final metodo actualizar

        // metodo registrar
        public function Registrar(Cliente $data){
            try {
                $sql = "insert into clientes(nombre,apellido,celular,correo) values (?,?,?,?)";
                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('nombre'),
                    $data->__GET('apellido'),
                    $data->__GET('celular'),
                    $data->__GET('correo')                                        
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>