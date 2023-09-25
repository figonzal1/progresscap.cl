<?php
// Comprueba si el directorio y el nombre del archivo están establecidos
if (isset($_GET['curso']) && isset($_GET['diploma'])) {

    $curso = $_GET['curso'];
    $archivo = $_GET['diploma'];

    // Sanitiza las entradas 
    $curso = htmlentities($curso);
    $archivo = htmlentities($archivo);

    // Verifica si el curso y el archivo son válidos
    if (preg_match('/^[a-z0-9-_]+$/i', $curso) && preg_match('/^[a-z0-9-_]+$/i', $archivo)) {

        // Construye la ruta al archivo
        $ruta = 'certificados/' . $curso . '/' . $archivo . ".pdf";

        // Comprueba si el archivo existe
        if (file_exists($ruta)) {
            // Redirige al archivo
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
