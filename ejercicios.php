<?php

$nombres = ['Victor', 'Iris', 'Elizabeth', 'Joel'];

foreach ($nombres as $indice => $nombre) {
    echo $nombre . " se encontraba en el indice $indice <br>";
}


// $base = 5;
// $exp = 4;

// $resultado = 1;

// for ($i = 0; $i <= $exp; $i++) { 
//     $resultado = $resultado * $base;
// }

// echo "El valor de $base elevado a la $exp es: $resultado";


// echo match($a) {
//     1 => 'Domingo',
//     2 => 'Lunes',
//     3 => 'Martes',
//     4 => 'Miercoles'
//     5 => 'Jueves',
//     6 => 'Viernes',
//     7 => 'Sabado',

//     default => 'El valor no puede exceder a 7'
// };

// switch ($a) {
//     case '1':
//         echo 'Domingo';
//         break;

//     case $a >= 7.0 && $a <= 7.9:
//         echo 'Aprobaste';
//         break;

//     case '3':
//         echo 'Martes';
//         break;

//     case '4':
//         echo 'Miercoles';
//         break;

//     case '5':
//         echo 'Jueves';
//         break;

//     case '6':
//         echo 'Viernes';
//         break;

//     case '7':
//         echo 'Sabado';
//         break;

//     default:
//         echo 'El valor no puede exceder a mas de 7';
//         break;
// }

?>