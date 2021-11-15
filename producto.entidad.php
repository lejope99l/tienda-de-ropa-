<?php
    //Definición de la clase Producto
    class Producto{
        // atributos de la clase Producto
        private $idproducto;
        private $nombre;
        private $precio;
        private $stock;

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
