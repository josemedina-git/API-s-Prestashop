<?php
// Habilitar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura los datos del formulario
    $treatment = $_POST['treatment'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $group = $_POST['group'];
    $password = $_POST['password'];
    $active = isset($_POST['active']) ? 1 : 0;
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;
    $partner_offers = isset($_POST['partner_offers']) ? 1 : 0;

    // URL de la API y clave
    $apiUrl = 'http://192.168.100.73/api/customers';
    $apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

    // Crea el XML a enviar
    $xmlData = "<?xml version='1.0' encoding='UTF-8'?>
    <prestashop xmlns:xlink='http://www.w3.org/1999/xlink'>
        <customer>
            <id_gender>$treatment</id_gender>
            <firstname>$firstname</firstname>
            <lastname>$lastname</lastname>
            <email>$email</email>
            <passwd>$password</passwd>
            <id_default_group>$group</id_default_group>
            <active>$active</active>
            <newsletter>$newsletter</newsletter>
            <optin>$partner_offers</optin>
        </customer>
    </prestashop>";

    // Inicializa cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));

    // Ejecuta la solicitud
    $response = curl_exec($ch);

    // Verifica errores
    if (curl_errno($ch)) {
        echo 'Error en cURL: ' . curl_error($ch);
    } else {
        // Manejo de la respuesta
        $responseXml = simplexml_load_string($response);
        if (isset($responseXml->errors)) {
            echo 'Error al agregar cliente: ';
            foreach ($responseXml->errors->error as $error) {
                echo (string)$error->message . '<br>';
            }
        } else {
            // Redirige a la tabla de clientes o a donde desees después de un breve tiempo
            header("refresh:2;url=tbl_clients.php");
            exit;
        }
    }

    // Cierra cURL
    curl_close($ch);
}
?>
