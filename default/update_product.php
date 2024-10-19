<?php
// Habilitar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// URL de la API y clave
$apiUrl = 'http://192.168.100.73/api/products';
$apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

// Obtener datos del formulario
$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$reference = isset($_POST['reference']) ? trim($_POST['reference']) : '';
$price = isset($_POST['price']) ? (float)$_POST['price'] : 0.0;
$active = isset($_POST['active']) ? (int)$_POST['active'] : 0;

// Crear XML para la actualización
$xml = "<?xml version='1.0' encoding='UTF-8'?>
<prestashop xmlns:xlink='http://www.w3.org/1999/xlink'>
    <product>
        <id><![CDATA[$id]]></id>
        <name>
            <language id='1'><![CDATA[$name]]></language>
        </name>
        <reference><![CDATA[$reference]]></reference>
        <price><![CDATA[$price]]></price>
        <active><![CDATA[$active]]></active>
    </product>
</prestashop>";

// Inicializa cURL para la actualización
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$apiUrl/$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/xml',
    'Content-Length: ' . strlen($xml)
]);

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

// Maneja la respuesta
$responseXml = simplexml_load_string($response);
if (isset($responseXml->errors)) {
    echo 'Error al actualizar el producto: ' . $responseXml->errors->error->message;
} else {
    // Redirigir a la página de productos después de la actualización
    header("Location: tbl_products.php");
    exit;
}
?>
