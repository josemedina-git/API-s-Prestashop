<!DOCTYPE html>
<html lang="en">

<head>

    <title>Prestashop Practica</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../assets/plugins/animation/css/animate.min.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="index.html" class="b-brand">
					<img src="../assets/images/logo.svg" alt="" class="logo images">
					<img src="../assets/images/logo-icon.svg" alt="" class="logo-thumb images">
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption">
						<label>Navegación</label>
					</li>
					<li class="nav-item">
						<a href="index.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Resumen</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Tablas</label>
					</li>
					<li class="nav-item">
						<a href="tbl_products.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Productos</span></a>
					</li>
					<li class="nav-item">
						<a href="tbl_clients.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Clientes</span></a>
					</li>
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Upgrade to pro</h6>
						<p>upgrade for get full themes and 30min support</p>
						<a href="https://codedthemes.com/item/flash-able-bootstrap-admin-template/" target="_blank" class="btn btn-gradient-primary btn-sm text-white m-0">Upgrade</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <img src="../assets/images/logo.svg" alt="" class="logo images">
                <img src="../assets/images/logo-icon.svg" alt="" class="logo-thumb images">
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="main-search open">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Clientes</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="tbl_clients.php">Clientes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ stiped-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Clientes</h5>
                                            <span class="d-block m-t-5">[GET] [POST] [PUT] [DELETE]</span>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="mb-3">
                                                <a href="client_add.php" class="btn btn-primary">Agregar Cliente</a>
                                            </div>
                                            <div class="table-responsive">
                                            <?php
                                            // Habilitar la visualización de errores de PHP
                                            ini_set('display_errors', 1);
                                            ini_set('display_startup_errors', 1);
                                            error_reporting(E_ALL);

                                            // URL de tu tienda Prestashop con el endpoint de clientes
                                            $apiUrl = 'http://192.168.100.73/api/customers';

                                            // Tu clave API generada desde el back-office de Prestashop
                                            $apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

                                            // Inicializa cURL
                                            $ch = curl_init();

                                            // Configura las opciones de cURL
                                            curl_setopt($ch, CURLOPT_URL, $apiUrl);
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                                            curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');

                                            // Ejecuta la solicitud
                                            $response = curl_exec($ch);

                                            // Manejo de errores de cURL
                                            if (curl_errno($ch)) {
                                                echo 'Error en cURL: ' . curl_error($ch);
                                                curl_close($ch);
                                                exit;
                                            }

                                            // Intenta convertir el XML
                                            try {
                                                $customers = new SimpleXMLElement($response);

                                                // Encabezado de la tabla
                                                echo "<table class='table table-striped'>";
                                                echo "<tr>
                                                        <th>ID</th>
                                                        <th>Tratamiento</th>
                                                        <th>Nombre</th>
                                                        <th>Apellidos</th>
                                                        <th>Dirección de correo electrónico</th>
                                                        <th>Grupo</th>
                                                        <th>Ventas</th>
                                                        <th>Activado</th>
                                                        <th>Boletín</th>
                                                        <th>Ofertas de asociados</th>
                                                        <th>Fecha de registro</th>
                                                        <th>Última visita</th>
                                                        <th>Acciones</th>
                                                    </tr>";

                                                // Recorre los clientes y obtiene sus detalles
                                                foreach ($customers->customers->customer as $customer) {
                                                    $customerId = (string)$customer['id'];

                                                    // Llama a la API para obtener detalles del cliente
                                                    $detailUrl = "http://192.168.100.73/api/customers/$customerId";

                                                    // Configura cURL para la segunda llamada
                                                    curl_setopt($ch, CURLOPT_URL, $detailUrl);
                                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                    $detailResponse = curl_exec($ch);

                                                    // Verifica la respuesta del detalle
                                                    if (curl_errno($ch)) {
                                                        echo 'Error al obtener detalles del cliente: ' . curl_error($ch);
                                                        continue;
                                                    }

                                                    // Convierte la respuesta en detalle
                                                    $customerDetails = new SimpleXMLElement($detailResponse);

                                                    // Obtiene los detalles requeridos
                                                    $treatment = (string)$customerDetails->customer->id_gender == '1' ? 'Sr.' : 'Sra.'; // Asumiendo 1 es masculino y 2 es femenino
                                                    $firstname = (string)$customerDetails->customer->firstname;
                                                    $lastname = (string)$customerDetails->customer->lastname;
                                                    $email = (string)$customerDetails->customer->email;
                                                    $group = (string)$customerDetails->customer->id_default_group; // Necesitarás convertir esto a un nombre de grupo si lo deseas
                                                    $sales = (string)$customerDetails->customer->total_spent; // Total gastado, puede no estar disponible directamente
                                                    $active = (string)$customerDetails->customer->active ? 'Sí' : 'No';
                                                    $newsletter = (string)$customerDetails->customer->newsletter ? 'Sí' : 'No';
                                                    $partner_offers = (string)$customerDetails->customer->optin ? 'Sí' : 'No';
                                                    $registration_date = (string)$customerDetails->customer->date_add;
                                                    $last_visit = (string)$customerDetails->customer->last_passwd_gen; // Esto puede no estar disponible

                                                    // Imprime los detalles en la tabla
                                                    echo "<tr>
                                                            <td>$customerId</td>
                                                            <td>$treatment</td>
                                                            <td>$firstname</td>
                                                            <td>$lastname</td>
                                                            <td>$email</td>
                                                            <td>$group</td>
                                                            <td>$sales</td>
                                                            <td>$active</td>
                                                            <td>$newsletter</td>
                                                            <td>$partner_offers</td>
                                                            <td>$registration_date</td>
                                                            <td>$last_visit</td>
                                                            <td>
                                                                <a href='client_up.php?id=$customerId'>Editar</a> | 
                                                                <a href='delete_client.php?id=$customerId'onclick=\"return confirm('¿Estás seguro de que deseas eliminar este producto?');\">Eliminar</a>
                                                            </td>
                                                        </tr>";
                                                }
                                                echo "</table>";
                                            } catch (Exception $e) {
                                                echo 'Error al analizar la respuesta XML: ' . $e->getMessage();
                                            }

                                            // Cierra cURL
                                            curl_close($ch);
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ stiped-table ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>

</body>

</html>
