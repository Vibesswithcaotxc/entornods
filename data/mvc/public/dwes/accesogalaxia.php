<?php

namespace Dwes;

require "galaxia.php";
require "galaxiaenana/galaxiaenana.php";

echo "<h2>Acceso sin cualificar</h2>"; //clases del mismo paquete

observar("Andromeda");
echo "<br>El radio es " . RADIO;
$gl = new galaxia();
galaxia::muerte();

echo "<h2>Acceso Cualificado </h2>"; //absoluto desde mi ubicacion
Galaxiaenana\observar("Los 3 pilares");
echo "<br>El radio es " . Galaxiaenana\RADIO;
$gl = new Galaxiaenana\galaxia();
Galaxiaenana\galaxia::muerte();


echo "<h2>Acceso Totalmente Cualificado </h2>"; //absoluto desde la raiz
\Dwes\Galaxiaenana\observar("NGC 5709");
echo "<br>El radio es " . \Dwes\Galaxiaenana\RADIO;
$gl = new \Dwes\Galaxiaenana\galaxia();
Galaxiaenana\galaxia::muerte();

//Importar la clase : comando use
use Dwes\Galaxiaenana as GA;
GA\observar("memento");

echo "<h2> NAmespace Global </h2>";

echo "Hora actual : " . \time();
echo "Vida de la galaxia: " . time();

