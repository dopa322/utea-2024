<?php

class saya{

    /*public string $name ;
    public int $nivel_pelea;*/

    //constructor
    /*public function __construct($name,$nivel_pelea)
    {
       $this->name=$name;
       $this->nivel_pelea = $nivel_pelea; 
    }*/

    //CONSTRUCTOR PROPERTY PROMOTION 

    public function __construct(public string $name, public int $nivel_pelea)
    {
        //es vacio y seguira funcionando
    }

    //creamos metodos
    public function saludar($texto):string{ // le pasaremos un parametro 
        return $texto.$this ->name ;
    }

    public function nivelPelea(){
        return $this->name." tiene un nivel de pelea de ".
        $this->nivel_pelea;
    }
}
