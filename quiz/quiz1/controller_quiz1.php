<?php
require_once 'model_quiz1.php';
session_start();

if ($_POST["nombreProducto"] == '') { //ingrese nombre valido
    echo 'ingreseNombreValido';
} else {
    if (intval($_POST["montoProducto"]) <= 0) { //Validación de que ingrese monto valido
        echo 'ingreseMontoInvalido';
    } else {
        if (intval($_POST["montoProducto"]) > 3500) { //Validación de que no supere el monto indicado
            echo "SuperaMontoPermitido";
        } else {
            $valMax = $_SESSION["montoFinal"] + $_POST["montoProducto"];
            if ($valMax > 50000) {
                echo "SuperaMontoMax";
            } else { //agregar producto
                $obj = new producto($_POST["nombreProducto"], intval($_POST["montoProducto"]));
                array_push($_SESSION["dataProducto"], $obj);
                $cont = 0;
                $_SESSION["montoFinal"] = $_SESSION["montoFinal"] + intval($_POST["montoProducto"]);
                foreach ($_SESSION["dataProducto"] as $a) {
                    $cont = $cont + 1;
                    echo '<tr>';
                    echo '<th scope="row">' . $cont . '</th>';
                    echo '<td>' . $a->nombreProducto . '</td>';
                    echo '<td>' . $a->precioProducto . '</td>';
                    echo '</tr>';
                }

            }
        }
    }
}



?>