<?php
// Habilitar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// URL de la API y clave
$apiUrl = 'http://192.168.100.73/api/products';
$apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos del formulario
    $name = $_POST['name'];
    $reference = $_POST['reference'];
    $price = $_POST['price'];
    $active = $_POST['active'] ? 1 : 0;

    // Construye el XML para el nuevo producto
    $xmlData = '<?xml version="1.0" encoding="UTF-8"?>
    <prestashop>
        <product>
            <name>
                <language id="1">' . htmlspecialchars($name) . '</language>
            </name>
            <reference>' . htmlspecialchars($reference) . '</reference>
            <price>' . htmlspecialchars($price) . '</price>
            <active>' . htmlspecialchars($active) . '</active>
            <associations>
                <categories>
                    <category id="1"/> <!-- Reemplaza con el ID de una categoría existente -->
                </categories>
                <stock_availables>
                    <stock_available>
                        <quantity><![CDATA[10]]></quantity> <!-- Cantidad en stock -->
                    </stock_available>
                </stock_availables>
            </associations>
        </product>
    </prestashop>';

    // Inicializa cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));

    // Ejecuta la solicitud
    $response = curl_exec($ch);

    // Verifica errores
    if (curl_errno($ch)) {
        curl_close($ch);
        // Redirige a la página sin mostrar el error
        header('Location: tbl_products.php');
        exit;
    }

    // Cierra cURL
    curl_close($ch);

    // Procesa la respuesta
    $xmlResponse = simplexml_load_string($response);
    if ($xmlResponse && isset($xmlResponse->product->id)) {
        // Producto agregado exitosamente, redirige a la tabla
        header('Location: tbl_products.php');
        exit;
    } else {
        // Redirige a la página sin mostrar el error
        header('Location: tbl_products.php');
        exit;
    }
}
?>