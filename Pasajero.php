<?php
class Pasajero{
    private $nombre; 
    private $numeroAsiento;
    private $numeroTicket;

public function __construct ($nombreC, $numeroAsientoC, $numeroTicketC){
    $this -> nombre = $nombreC;
    $this -> numeroAsiento = $numeroAsientoC;
    $this -> numeroTicket = $numeroTicketC;
}

public function getNombre(){
    return $this-> nombre;
}

public function getNumeroAsiento(){
    return $this-> numeroAsiento;
}

public function getNumeroTicket(){
    return $this-> numeroTicket;
}

public function setNombre($nombreSet){
    $this->nombre = $nombreSet;
}
public function setNumeroAsiento($numeroAsientoSet){
    $this->numeroAsiento = $numeroAsientoSet; 
}
public function setNumeroTicket($numeroTicketSet){
    $this->numeroTicket = $numeroTicketSet; 
}
public function darPorcentajeIncremento() {
    return 10;
}
public function __toString(){
    return 
    "Nombre Pasajero:". $this->nombre. "\n". 
    "Numero de Asiento". $this->numeroAsiento. "\n". 
    "Numero de Ticket" . $this->numeroTicket;

}
}