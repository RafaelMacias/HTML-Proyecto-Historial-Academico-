<?php

class conectar{

    function _construc(){
        $con=pg_connect("host='localhost' dbname='Base de Datos Registro' port='5432' user='postgres' password='killerag3'")
        or die ("No se pudo conectar");
    }

    
}

?>