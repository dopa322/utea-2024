<?php

class coche{
    public $combustible;
    public $deposito = 0;
    public $velocidad =0;

    /* constructor */
    public function __construct($combustible)
    {
        $this->combustible = $combustible;
        
    }
    public function acelerar($velocidad){
        if($this->deposito > 0 ||$this->deposito < 10){
             $this-> velocidad = 0;
        }
        else if($this->deposito >= 10 ){
             $this->velocidad = $velocidad;
        }
        return $this->velocidad;
    }

    public function repostar($tipo_gasolina,$cantidad){
        if($tipo_gasolina == 'Gasolina' ||$tipo_gasolina == 'gasolina' ){
            $this->deposito = $cantidad;
        }
        else{
            $this->deposito;
        }

        return  $this->deposito ;
    }

    public function estado(){
        //if(){

        //}
    }
}



$miCoche = new Coche('Gasoil');
echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10). "<br>";
echo "Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("petroleo", 40)."<br>";
echo "Combustible después de echar 40 litros de Gasolina: " . $miCoche->repostar("Gasolina", 40) . "<br>";
echo "Velocidad después de acelerar con combustible en el depósito: ". $miCoche->acelerar(10). "<br>";
echo "Estado del coche: ". $miCoche->estado();

/* Velocidad después de acelerar con el depósito vacío: 0
Combustible después de repostar con el combustible equivocado:  0
Combustible después de echar 40 litros de gasóleo: 40
Velocidad después de acelerar con combustible en el depósito: 10
Estado del coche: Moviéndose
 */

?>