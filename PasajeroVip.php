<?php 
include_once "Pasajero.php"; 
class PasajeroVip extends Pasajero{
    private $numeroViajeroFrecuente;
    private $millasPasajero;

    public function __construct($nombreC, $numeroAsientoC, $numeroTicketC, $numeroViajeroFrecuenteC, $millasPasajeroC){
        parent::__construct($nombreC, $numeroAsientoC, $numeroTicketC); 
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuenteC; 
        $this->millasPasajero = $millasPasajeroC; 
    }

    public function getNumeroViajeroFrecuente(){
        return $this->numeroViajeroFrecuente; 
    }

    public function getMillasPasajero(){
        return $this->millasPasajero; 
    }

    public function setNumeroViajeroFrecuente($numeroViajeroFrecuenteSet){
        $this-> numeroViajeroFrecuente = $numeroViajeroFrecuenteSet;
    }

    public function setMillasPasajero($millasPasajeroSet){
        $this->millasPasajero = $millasPasajeroSet; 
    }

    public function darPorcentajeIncremento() {
        $incremento = 35; 
        $millas = $this-> getMillasPasajero();
        if($millas > 300){
            $incremento = 30; 
        }
        return $incremento;
    }

    public function __toString(){
        return
        parent::__toString() . "\n".
        "Numero de Viajero Frecuente:" . $this->getNumeroViajeroFrecuente(). "\n".
        "Cantidad de Millas:". $this->getMillasPasajero(); 
    }
}