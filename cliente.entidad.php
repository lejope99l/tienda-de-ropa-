<?php
    //Definición de la clase Producto
    class Cliente{
        // atributos de la clase Producto
        private $id;
        private $nombre;
        private $apellido;
        private $celular;
        private $correo;

        //metodo GET
        public function __GET($k){
            return $this->$k;
        }
        //metodo SET
        public function __SET($k,$v){
            return $this->$k = $v;
        }
    }
?>