<?php 

namespace Dwes\Galaxiaenana;

const RADIO = 35; //millones de km

function observar($nombre){
    echo "<br> Mirando a: $nombre";
}


class galaxia 
{
    function __construct(){
        $this->nacer();

    }

    function nacer(){
        echo "<br> Hace mucho tiempo en una galaxia muy muy diminuta..";
    }

    static function muerte() {
        echo"<br> Luck yo soy tu padre...";
    }
    
 
}//fin clase
