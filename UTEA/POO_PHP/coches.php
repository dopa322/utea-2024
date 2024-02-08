<?php

class Coche{

    public $deposito = 0;
    public $velocidad = 0;
    public $estado="parado";

    public function __construct(public $combustible)
    {
        
    }
    
    public function acelerar($velocidad){

        if($this->deposito >0 ){
           $this->velocidad= $velocidad ;
        }
        else{
            $this->velocidad;
        }
        return $this->velocidad;
    }
    public function repostar($Tipo_combutible,$cantidad){

        if($Tipo_combutible==$this->combustible && $cantidad >0 ){
            $this->deposito = $cantidad;
        }else{
            $this->deposito = 0;
        }

        return $this->deposito;
    }

    
    public function estado(){
        if($this->velocidad >0){
            $this->estado = "moviendose";
            
        }
        else{
            $this->estado;
            

        }
        return $this->estado;
    }
}
    $miCoche = new Coche("gasolina");
    echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10). "<br>";
    echo "Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("petroleo", 40)."<br>";
    echo "Combustible después de echar 40 litros de gasolina: " . $miCoche->repostar("gasolina", 40) . "<br>";
    echo "Velocidad después de acelerar con combustible en el depósito: ". $miCoche->acelerar(10). "<br>";
    echo "Estado del coche: ". $miCoche->estado();


?>