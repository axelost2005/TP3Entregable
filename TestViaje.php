<?php
include_once 'Viaje.php';



$pasajero1 = new Pasajero("Axel", 10, 1);
$pasajero2 = new Pasajero("Sofia", 11, 2);
$pasajero3 = new Pasajero("Diego", 12, 3);


$pasajero4 = new PasajeroVip("Luciana", 13, 4, 111, 150);
$pasajero5 = new PasajeroVip("Miguel", 14, 5, 222, 290);
$pasajero6 = new PasajeroVip("Valeria", 15, 6, 333, 100);


$pasajero7 = new PasajeroEspecial("Emilio", 16, 7, false, true, false);
$pasajero8 = new PasajeroEspecial("Camila", 17, 8, true, true, true);
$pasajero9 = new PasajeroEspecial("Esteban", 18, 9, false, false, true);


$viaje = new Viaje(777, "Mendoza" , 8 , [] , "Axel", 1000);


$vender1 = $viaje->venderPasaje($pasajero1);

$vender2 = $viaje->venderPasaje($pasajero2);

$vender3 = $viaje->venderPasaje($pasajero3);

$vender4 = $viaje->venderPasaje($pasajero4);

$vender5 = $viaje->venderPasaje($pasajero5);

$vender6 = $viaje->venderPasaje($pasajero6);  

if ($vender3 != 0) {
    echo "Se vendio el pasaje\n";
} else {
    echo "No se vendio el pasaje\n";
}

$cantidadMaxima = $viaje->getCantidadMaximaPasajeros();
echo "Cantidad Maxima de pasajeros : $cantidadMaxima";
