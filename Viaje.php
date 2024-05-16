<?php
include 'Pasajero.php';
include 'PasajeroEspecial.php';
include 'PasajeroVip.php';


class Viaje { 
    
    private $codigoViaje;
    private $destino;
    private $cantidadMaximaPasajeros;
    private $coleccionPasajeros;   
    private $responsableViaje;
    private $costoViaje;
    private $sumaPasajesVendidos;  
    
    public function __construct($codigoViajeC , $destinoC , $cantidadMaximaPasajerosC , $coleccionPasajerosC , $responsableViajeC , $costoViajeC) {
        $this->codigoViaje = $codigoViajeC;
        $this->destino = $destinoC;
        $this->cantidadMaximaPasajeros = $cantidadMaximaPasajerosC;
        $this->coleccionPasajeros = $coleccionPasajerosC;
        $this->responsableViaje = $responsableViajeC;
        $this->costoViaje = $costoViajeC;
        $this->sumaPasajesVendidos = 0;
    }
    
    public function getCodigoViaje() {
        return $this->codigoViaje;
    }
    public function getDestinoViaje() {
        return $this->destino;
    }
    public function getCantidadMaximaPasajeros() {
        return $this->cantidadMaximaPasajeros;
    }
    public function getColeccionPasajeros() {
        return $this->coleccionPasajeros;
    }
    public function getResponsableViaje() {
        return $this->responsableViaje;
    }
    public function getCostoViaje() {
        return $this->costoViaje;
    }
    public function getSumaPasajesVendidos() {
        return $this->sumaPasajesVendidos;
    }
    
    public function setCodigoViaje($codigoSet) {
        $this->codigoViaje = $codigoSet;
    }
    public function setDestinoViaje($destinoSet) {
        $this->destino = $destinoSet;
    }
    public function setCantidadMaximaPasajeros($numSet) {
        $this->cantidadMaximaPasajeros = $numSet;
    }
    public function setColeccionPasajeros($coleccionSet) {
        $this->coleccionPasajeros = $coleccionSet;
    }
    public function setResponsableViaje($responsableViajeSet) {
        $this->responsableViaje = $responsableViajeSet;
    }
    public function setCostoViaje($costoSet) {
        $this->costoViaje = $costoSet;
    }
    public function setSumaPasajesVendidos($sumaSet) {
        $this->sumaPasajesVendidos = $sumaSet;
    }
    public function hayPasajesDisponible(){
        $cantMaxPas = $this-> getCantidadMaximaPasajeros();
        $cantPas = count($this->getColeccionPasajeros()); 
        $disponibilidad = false; 
        if($cantPas < $cantMaxPas){
            $disponibilidad = true; 
        }
        return $disponibilidad; 
    }
    public function agregarPasajero($objPasajero) {
        $colecPasajeros = $this->getColeccionPasajeros();
        array_push($colecPasajeros , $objPasajero);
        $this->setColeccionPasajeros($colecPasajeros);
        return true;
    }
    public function venderPasaje($objPasajero) {
        $numeroTicket = $objPasajero->getNumeroTicket();
        $disponibilidad = $this->hayPasajesDisponible();
        $importeFinal = 0;

        if ($disponibilidad) {
            $pasajeVendido = false;

            foreach ($this->coleccionPasajeros as $pasajero) {
                if ($pasajero->getNumeroTicket() == $numeroTicket) {
                    $pasajeVendido = true;
                    break;
                }
            }

            if (!$pasajeVendido) {
                $this->agregarPasajero($objPasajero);
                
                $importeBase = $this->getCostoViaje();
                $porcentaje = $objPasajero->darPorcentajeIncremento();
                $importeIncrementar = ($porcentaje * $importeBase) / 100;
                $importeFinal = $importeBase + $importeIncrementar;

                $this->sumaPasajesVendidos += $importeFinal;
            }
        }
        
        return $importeFinal;
    }

    public function mostrarPasajeros() {
        $string = "";
        foreach ($this->coleccionPasajeros as $pasajero) {
            $string .= $pasajero->__toString() . "\n";
        }
        return $string;
    }

    public function __toString() {
        return 
                "Codigo de Viaje: " . $this->getCodigoViaje() . "\n" .
                "Destino: " . $this->getDestinoViaje() . "\n" .
                "Cantidad Maxima de Pasajeros: " . $this->getCantidadMaximaPasajeros() . "\n" .
                "Responsable del Viaje: " . $this->getResponsableViaje() . "\n" .
                "Costo del Viaje: " . $this->getCostoViaje() . "\n" .
                "Suma de Pasajes Vendidos: " . $this->getSumaPasajesVendidos() . "\n" .
                "Pasajeros -> " . "\n" . $this->mostrarPasajeros();
    }
}


