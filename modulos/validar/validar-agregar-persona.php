<?php
include '../../include/conexion.php';  //include del php conexion para la base de datos
session_start();                       

if(isset($_POST['agregar'])){         //condicionales para validar traídos por metodo $_POST
    $ape_y_nom = $_POST["ape_y_nom"];
    $dni = $_POST["dni"];
    $edad = $_POST["edad"];
    $localidad = $_POST["localidad"];
    $rango = $_POST["rango"];

    if(empty($ape_y_nom)){
        echo 'Ingrese un apellido y nombre';
    } else if(empty($dni)){
        echo 'Ingrese un dni';
    } else if(empty($edad)){
        echo 'Ingrese una edad';
    } else if(empty($localidad)){
        echo 'Ingrese una localidad';
    } else {
        //Sentencia SQL para insertar una nueva persona
        $sql1 = $conexion->prepare("INSERT INTO personas(ape_y_nom, dni, edad, localidad, rango)
                                    VALUES (:ape_y_nom,:dni,:edad,:localidad,:rango)");
        $sql1->execute(array(":ape_y_nom" => $ape_y_nom,
                             ":dni" => $dni,
                             ":edad" => $edad,
                             ":localidad" => $localidad,
                             ":rango" => $rango));

        if($sql1->rowCount() == 1){ 
            echo 'Se agregó una nueva persona';
            echo  '<br><a href="../../index1.php">Volver</a>'; //Para regresar al index
        } else {
            echo 'ERROR';
            echo  '<br><a href="../../index1.php">Volver</a>';
        }
    }
} else {
    echo 'vacío';
}
?>