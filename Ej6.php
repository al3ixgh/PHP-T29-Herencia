<?php
    class Persona{
        protected $nombre;
        protected $edad;

        public function cargar($nom,$edad){
            $this->nombre=$nom;
            $this->edad=$edad;
        }

        public function imprimir(){
            echo $this->nombre." ".$this->edad;
        }
    }

    class Empleado extends Persona{
        public $sueldo;

        public function cargarEmpleado($nom,$edad,$sueldo){
            parent::cargar($nom,$edad);
            $this->sueldo=$sueldo;
        }

        public function imprimir(){
            parent::imprimir();
            echo " ".$this->sueldo;
        }
    }

    $empleado1 = new Empleado();
    $empleado1->cargarEmpleado('Toni',33,1000);
    $empleado1->imprimir();
?>