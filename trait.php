<?php
//Los traits son un mecanismo de reutilización de código en leguajes que tienen herencia simple, como PHP.
class Persona{
    public $nombre;

    public function saludo(){
        echo "Hola";
    }

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }

}

trait A{
    public function decirHola(){
        echo "Hola";
    }
}

trait B{
    public function decirMundo(){
        echo "mundo";
    }

    abstract public function saludar();
}

trait C{
    use A, B;

    public function saludar(){
        $this->decirHola();
        $this->decirMundo();
    }
    
}

class Peruano extends Persona
{
   use C;
}

$peruano = new Peruano;

$peruano->saludar();



