<?php
    class Persona{
        protected $nombre;
        protected $edad;
        protected $sexo;
        
    }

    class Estudiante extends Persona{
        public $calificacion;

        public function ausencia(){
            $ausente=false;
            $prob=random(1,100);
            if($prob<50){
                $ausente=true;
                echo "El alumno esta ausente";
            }else echo "El alumno ha asistido";
        }
    }

    class Profesor extends Persona{
        public $materia

        public function ausencia(){
            $ausente=false;
            $prob=random(1,100);
            if($prob<20){
                $ausente=true;
                echo "El alumno esta ausente";
            }else echo "El alumno ha asistido";
        }
    }

    class Aula{
        public $id;
        public $maxEstudiantes;
        public $materia
        public $numEstudiantes;
        public $hayClase;

        // Hay que meter el condicional del profesor
        public function hayClase(){
            if($numEstudiantes<$maxEstudiantes/2){
                $this->hayClase=false;
            }
            else{
                $this->hayClase=true;
            }
        }
    }
?>