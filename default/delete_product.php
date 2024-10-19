<?php
// Habilitar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica si se ha pasado el ID
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // URL de la API y clave
    $apiUrl = "http://192.168.100.73/api/products/$id";
    $apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

    // Inicializa cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

    // Ejecuta la solicitud
    $response = curl_exec($ch);

    // Verifica errores
    if (curl_errno($ch)) {
        echo 'Error en cURL: ' . curl_error($ch);
        curl_close($ch);
        exit;
    }

    // Cierra cURL
    curl_close($ch);

    // Manejo de la respuesta
    // Aquí puedes analizar la respuesta para determinar si la eliminación fue exitosa
} else {
    echo "No se ha proporcionado un ID.";
}

// Redirige de nuevo a la página de productos después de un segundo
header("refresh:1;url=tbl_products.php");
exit;
?>