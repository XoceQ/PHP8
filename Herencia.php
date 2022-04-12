<?php
/* Herencia= característica de los lenguajes orientados a objetos, que le permite a una clase 
(llamada la sublclase o la clase hijo) heredar todas los miembros de otra (llamada la superclase o la clase padre).*/


class Persona{
    public $nombre, $apellido, $edad; 

    public function _construct($nombre, $apellido, $edad) //_construct permite a los desarrolladores declarar métodos constructores para las clases. Aquellas que tengan un método constructor lo invocarán en cada nuevo objeto creado, lo que lo hace idóneo para cualquier inicialización que el objeto pueda necesitar antes de ser usado.
    {
        $this->nombre = strtolower($nombre);
        $this->apellido = strtolower($apellido);
        $this->edad = strtolower($edad);
    }

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre); // is used to convert a string into lowercase(minusculas). 
    }

    public function getNombre(){
        return ucwords($this->nombre);// Convierte a mayúsculas el primer caracter de cada palabra de una cadena
    }
}