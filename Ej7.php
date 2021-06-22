<?php
    class Electrodomestico{
        protected $precioBase;
        protected $color;
        protected $consumo;
        protected $peso;

        public function __construct(){
            $this->color = 'Blanco';
            $this->consumo = 'F';
            $this->precioBase = 100;
            $this->peso = 5;
        }

        public function __construct($precio,$peso){
            $this->color = 'Blanco';
            $this->consumo = 'F';
            $this->precioBase = $precio;
            $this->peso = $peso;
        }

        public function getPrecio(){
            return $this->precioBase;
        }

        public function getColor(){
            return $this->color;
        }

        public function getConsumo(){
            return $this->consumo;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function comprobarConsumoEnergetico($letra){
            if(($letra<65)&&($letra>70)){
                $this->consumo='F';
            }else{
                $this->consumo=$letra;
            }
        }

        public function comprobarColor($color){
            $colores=array('blanco', 'negro', 'rojo', 'azul', 'gris');
            

        }
    }
?>
