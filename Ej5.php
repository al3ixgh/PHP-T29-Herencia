<?php
    class Operacion{
        protected $valor1;
        protected $valor2;
        protected $resultado;

        public function cargar1($valor){
            $this->valor1=$valor;
        }
        public function cargar2($valor){
            $this->valor2=$valor;
        }
        public function resultado(){
            echo $this->resultado;
        }
    }

    class Suma extends Operacion{
        public function operar(){
            $this->resultado=$this->valor1+$this->valor2;
        }
        public function resultado(){
            echo "La suma de $this->valor1 y $this->valor2 es: ";
            parent::resultado();
        }
    }

    class Resta extends Operacion{
        public function operar(){
            $this->resultado=$this->valor1-$this->valor2;
        }
        public function resultado(){
            echo "La resta de $this->valor1 y $this->valor2 es: ";
            parent::resultado();
        }
    }

    $op1=new Suma();
    $op1->cargar1(5);
    $op1->cargar2(10);
    $op1->operar();
    $op1->resultado();
    echo "<br>";

    $op2=new Resta();
    $op2->cargar1(5);
    $op2->cargar2(10);
    $op2->operar();
    $op2->resultado();
    echo "<br>";

?>