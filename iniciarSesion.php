<?php
    include ("conexion-db.php");

    if(isset($_POST['Usuario']) && isset(&_POST['Clave'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $Usuario=validate($_POST['Usuario']):
    $Clave=validate($_POST['Clave']):

    if (empty($Usuario)) {
        header("Location: Identification.php?error=El Usuario es requerido");
        exit();
    } elseif (empty($Clave)){
        header("Location: Identification.php?error=La Clave es requerido");
    }




    if($enlace) {
        echo "CONEXION";
    } else {
        echo "error";
    }
    ?>