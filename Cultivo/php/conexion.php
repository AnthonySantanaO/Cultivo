<?php
    $conexion = mysqli_connect("localhost", "root", "", "cultivo");
    if($conexion){
        echo 'Conectado a la Base de Datos';
    }
    else{
        echo 'No se ha podido conectar a la Base de Datos';
    }
?>