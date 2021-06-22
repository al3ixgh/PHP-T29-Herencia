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

        public function cargarSueldo($sueldo){
            $this->sueldo=$sueldo;
        }

        public function imprimir(){
            parent::imprimir();
            echo " ".$this->sueldo;
        }
    }

    $persona1= new Persona();
    $persona1->cargar('Aleix',26);
    $persona1->imprimir();
    echo "<br>";
    $empleado1 = new Empleado();
    $empleado1->cargar('Toni', 33);
    $empleado1->cargarSueldo(1000);
    $empleado1->imprimir();

?>