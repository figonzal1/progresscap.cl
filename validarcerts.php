<?php

function es_movil()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $moviles = array(
        'Android', 'iPhone', 'Windows Phone', 'iPod', 'BlackBerry', 'iPad', 'Symbian'
    );

    foreach ($moviles as $movil) {
        if (strpos($user_agent, $movil) !== false) {
            return true;
        }
    }

    return false;
}

// Comprueba si el directorio y el nombre del archivo están establecidos
if (isset($_GET['curso']) && isset($_GET['diploma'])) {

    $curso = $_GET['curso'];
    $archivo = $_GET['diploma'];

    // Sanitiza las entradas 
    $curso = htmlentities($curso);
    $archivo = htmlentities($archivo);

    // Verifica si el curso y el archivo son válidos
    if (preg_match('/^[a-z0-9-_]+$/i', $curso) && preg_match('/^[a-z0-9-_]+$/i', $archivo)) {


        if (es_movil()) {
            $prefix = 'https://docs.google.com/gview?embedded=true&url=https://www.progresscap.cl/';
        } else {
            $prefix = "https://www.progresscap.cl/";
        }

        // Construye la ruta al archivo
        $postRutaFull = 'certificados/' . $curso . '/' . $archivo . ".pdf";

        // Comprueba si el archivo existe
        if (file_exists($postRutaFull)) {

            // Redirige al archivo
            $postRuta = 'certificados/' . $curso . '/' . $archivo;
            $ruta = $prefix . $postRuta;
            header('Location: ' . $ruta);
        } else {
            echo 'El diploma que intentas acceder, no existe.';
        }
    } else {
        echo 'El curso o el nombre del diploma proporcionados no son válidos.';
    }
} else {
    echo 'Por favor, proporciona el curso y el nombre del diploma.';
}

/*
if (es_movil()) {
    echo "El cliente es un dispositivo móvil.";
} else {
    echo "El cliente no es un dispositivo móvil.";
}*/
