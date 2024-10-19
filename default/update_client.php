<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extrae los datos del formulario
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $id_gender = $_POST['id_gender'];
    $id_default_group = $_POST['id_default_group'];
    $active = isset($_POST['active']) ? '1' : '0';
    $newsletter = isset($_POST['newsletter']) ? '1' : '0';
    $optin = isset($_POST['optin']) ? '1' : '0';

    // Contraseña (opcional)
    $password = !empty($_POST['password']) ? md5($_POST['password']) : null;

    // Construye el XML para actualizar el cliente
    $xml = new SimpleXMLElement('<prestashop/>');
    $customer = $xml->addChild('customer');
    $customer->addChild('id', $id);
    $customer->addChild('firstname', $firstname);
    $customer->addChild('lastname', $lastname);
    $customer->addChild('email', $email);
    $customer->addChild('id_gender', $id_gender);
    $customer->addChild('id_default_group', $id_default_group);
    $customer->addChild('active', $active);
    $customer->addChild('newsletter', $newsletter);
    $customer->addChild('optin', $optin);

    if ($password) {
        $customer->addChild('passwd', $password);
    }

    // URL de la API
    $apiUrl = "http://192.168.100.73/api/customers/$id";
    $apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

    // Inicializa cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->asXML());
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));

    // Ejecuta la solicitud
    $response = curl_exec($ch);

    // Verifica errores en cURL
    if (curl_errno($ch)) {
        echo 'Error en cURL: ' . curl_error($ch);
    } else {
        // Maneja la respuesta de la API
        $responseXml = new SimpleXMLElement($response);
        if (isset($responseXml->customer)) {
            header("Location: tbl_products.php");
        } else {
            echo "Error al actualizar cliente: " . $response;
        }
    }

    // Cierra cURL
    curl_close($ch);
}
?>
