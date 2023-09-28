<?php
class ViajeFeliz {
private $codigo;
private $maxPasajeros;
private $destino;
private $colPasajeros;

public function __construct($codigo,$maxPasajeros,$destino, $colPasajeros){
    $this->codigo = $codigo;
    $this->maxPasajeros = $maxPasajeros;
    $this->destino = $destino;
    $this->colPasajeros = $colPasajeros;

}
//retorna el codigo
public function getCodigo (){
    return $this->codigo;
}
//setea el codigo
public function setCodigo ($codigo){
    return $this->codigo = $codigo;
}
//retorna la cantidad maxima de pasajeros
public function getMaxPasajeros (){
    return $this->maxPasajeros;
}
//setea la cantidad maxima de pasajeros
public function setMaxPasajeros ($maxPasajeros){
    return $this->maxPasajeros = $maxPasajeros;
}
//retorna el destino 
public function getDestino(){
    return $this->destino;
}
//setea el destino 
public function setDestino ($destino){
    return $this->destino = $destino;
}
//retorna los pasajeros
public function getColPasajeros (){
    return $this->colPasajeros;
}
// setea los pasajeros
public function setColPasajeros($colPasajeros)
{
    return $this->colPasajeros = $colPasajeros;
}


public function __toString()
{
    return "Codigo: ".$this->getCodigo()."\n"."Cantidad maxima de pasajeros: "
    .$this->getMaxPasajeros()."\n"."Destino: ".$this->getDestino()."\n"."Pasajeros: ".$this->mostrarPasajeros()."\n";
}

public function mostrarPasajeros (){
    $cadena = "";
    if (count($this->getColPasajeros()) == 0){
        $cadena = "El viaje no tiene pasajeros";
    }else{
        $pasajeros = $this->getColPasajeros();
        for ($i=0; $i < count($this->getColPasajeros()) ; $i++) { 
            $cadena = $cadena . $pasajeros [$i] ."\n";
        }
    }

    return $cadena;
}

public function cargarPasajeros (){
    
   for ($i=0; $i <count($this->getMaxPasajeros()) ; $i++) { 
    
   }
}

}
?>