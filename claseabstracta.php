<?php

abstract class ClaseAbstracta
{
    abstract protected function getValor();
    abstract public protected function valorPrefijo($prefijo);


    public function imprimir(){
        echo $this->getValor();

    }
}

class ClaseConcreta extends ClaseAbstracta
{
    protected function getValor(){
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = '.'){//logica del metodo
        return $prefijo . "Clase concreta";
    }
}

$clase1 = new ClaseConcreta;
//-> es un operador de objeto. Se usa para acceder a un miembro de un objeto.

$clase1->imprimir();
echo $clase1->valorPrefijo('asassasas');    