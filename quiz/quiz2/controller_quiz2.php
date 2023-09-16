<?php
require_once 'model_quiz2.php';

$italia = new pais('Italia', 'Europe/Rome');
$usa = new pais('Estados_Unidos', 'America/New_York');
$argentina = new pais('Argentina', 'America/Argentina/Buenos_Aires');
$españa = new pais('España', 'Europe/Madrid');

switch ($_POST['pais']) {
    case 'Italia':
        saludo($italia);
        break;
    case 'España':
        saludo($españa);
        break;
    case 'Argentina':
        saludo($argentina);
        break;
    case 'Estados_Unidos':
        saludo($usa);
        break;

    default:
        echo '<p>Pais No disponible</p>';
        break;
}

function Saludo($obj)
{
    $fecha = new DateTime("now", new DateTimeZone($obj->zonaHoraria));
    $hora = intval($fecha->format('H'));
    $fechaActual = $fecha->format('h:i a');
    
    if ($hora >= 1 && $hora < 12) {
        imprimirSaludo('Buenas Dias', $fechaActual);
    } else {
        if ($hora >= 12 && $hora < 20) {
            imprimirSaludo('Buenas Tardes', $fechaActual);
        } else {
            imprimirSaludo('Buenas Noches', $fechaActual);
        }
    }
}


function imprimirSaludo($saludo, $fecha)
{
    echo '
    <p>
        ' . $saludo . '
        <br>
        ' . $fecha . '
    </p>
    ';
}

?>