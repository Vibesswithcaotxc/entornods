<?php 

namespace Dwes;

const RADIO = 216.88; //millones de km

function observar($nombre){
    echo "<br> Observando la galaxia: $nombre";
}

function time(){
    echo "Me quedan 573489574385648784 años de vida";
}


class galaxia 
{
    function __construct(){
        $this->nacer();

    }

    function nacer(){
        echo "<br> Hace mucho tiempo en una galaxia muy muy lejana...";
    }

    static function muerte() {
        echo"<br> Me estoy muriendo...";
    }

   
    
 
}//fin clase




?>