<?php
include_once "Pasajero.php"; 
class PasajeroEspecial extends Pasajero{
    private $requiereSillaRuedas; 
    private $requiereAsistencia; 
    private $requiereComidaEspecial;
    
    public function __construct($nombreC, $numeroAsientoC, $numeroTicketC, $requiereSillaRuedasC, $requiereAsistenciaC, $requiereComidaEspecialC){
        parent::__construct($nombreC, $numeroAsientoC, $numeroTicketC); 
        $this->requiereSillaRuedas = $requiereSillaRuedasC;
        $this->requiereAsistencia = $requiereAsistenciaC;
        $this->requiereComidaEspecial = $requiereComidaEspecialC; 
    }
    public function getRequiereSillaRuedas() {
        return $this->requiereSillaRuedas;
    }

    public function getRequiereAsistencia() {
        return $this->requiereAsistencia;
    }

    public function getRequiereComidaEspecial() {
        return $this->requiereComidaEspecial;
    }

    public function setRequiereSillaRuedas($requiereSillaRuedasSet){
        $this-> requiereSillaRuedas = $requiereSillaRuedasSet; 
    }
    public function setRequiereAsistencia($requiereAsistenciaSet){
        $this-> requiereAsistencia = $requiereAsistenciaSet; 
    }
    public function setRequiereComidaEspecial($requiereComidaEspecialSet){
        $this-> requiereComidaEspecial = $requiereComidaEspecialSet; 
    }

    public function darPorcentajeIncremento() {
        $silla = $this -> getRequiereSillaRuedas();
        $comida = $this -> getRequiereComidaEspecial();
        $asistencia = $this-> getRequiereAsistencia();
        $incremento = 0; 
        if($silla = true && $comida = true && $asistencia = true){
            $incremento = 30; 
        }else if ($silla = true && $comida = false && $asistencia = false){
            $incremento = 10; 
        }else if ($silla = false && $comida = true && $asistencia = false){
            $incremento = 10; 
        }else if ($silla = false && $comida = false && $asistencia = true){
            $incremento = 10;
        }
    }
    
    public function __toString() {
        return 
        parent::__toString() . "\n" .
        "Requiere Silla de Ruedas: " . $this->getRequiereSillaRuedas() . "\n" .
        "Asistencia de Embarque: " . $this->getRequiereAsistencia() . "\n" .
        "Comida Especial: " . $this->getRequiereComidaEspecial() . "\n";
    }

}