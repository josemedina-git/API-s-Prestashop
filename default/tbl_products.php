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
                                                <h5 class="m-b-10">Productos</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="tbl_products.php">Productos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Productos</h5>
                                            <span class="d-block m-t-5">[GET] [POST] [PUT] [DELETE]</span>
                                        </div>
                                        <div class="card-body table-border-style">
                                        <div class="mb-3">
                                            <a href="product_add.php" class="btn btn-primary">Agregar Producto</a>
                                        </div>
                                            <div class="table-responsive">
                                            <?php
                                            // Habilitar errores
                                            ini_set('display_errors', 1);
                                            ini_set('display_startup_errors', 1);
                                            error_reporting(E_ALL);

                                            // URL de la API y clave
                                            $apiUrl = 'http://192.168.100.73/api/products';
                                            $apiKey = '12TJB6CLVHFUFSYINQG15QBMTNP6MP5G';

                                            // Inicializa cURL
                                            $ch = curl_init();
                                            curl_setopt($ch, CURLOPT_URL, $apiUrl . '?display=full'); // Obtener todos los datos de productos
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                                            curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');

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

                                            // Convertir la respuesta XML en un objeto SimpleXMLElement
                                            $products = simplexml_load_string($response);

                                            // Inicializa una tabla para mostrar los productos
                                            echo "<table class='table table-striped'>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Referencia</th>
                                                    <th>Categoría</th>
                                                    <th>Precio (imp. excl.)</th>
                                                    <th>Precio (imp. incl.)</th>
                                                    <th>Cantidad</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>";

                                            // Recorre cada producto y extrae los datos necesarios
                                            foreach ($products->products->product as $product) {
                                                $id = (int)$product->id;
                                                $name = (string)$product->name->language;
                                                $reference = (string)$product->reference;
                                                $categoryName = (string)$product->category;
                                                $priceExclTax = (float)$product->price;
                                                $priceInclTax = $priceExclTax * 1.16; // Ejemplo: multiplicador para un 16% de IVA
                                                $quantity = (int)$product->quantity;
                                                $active = ((int)$product->active == 1) ? 'Activo' : 'Inactivo';

                                                // Verifica si el producto tiene una imagen asignada
                                                if (isset($product->id_default_image)) {
                                                    $imageId = (int)$product->id_default_image;
                                                    // Construye la URL de la imagen
                                                    $imageUrl = "http://192.168.100.73/api/images/products/$id/$imageId";

                                                    // Obtener la imagen con cURL
                                                    $ch = curl_init();
                                                    curl_setopt($ch, CURLOPT_URL, $imageUrl);
                                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                                    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                                                    curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');
                                                    $imageData = curl_exec($ch);
                                                    curl_close($ch);

                                                    // Convertir la imagen a base64 para mostrarla
                                                    $imageBase64 = base64_encode($imageData);
                                                    $imageSrc = 'data:image/jpeg;base64,' . $imageBase64;

                                                    // Muestra los datos en la tabla
                                                    echo "<tr>
                                                        <td>$id</td>
                                                        <td><img src='$imageSrc' alt='Sin acceso' style='max-width: 100px;'></td>
                                                        <td>$name</td>
                                                        <td>$reference</td>
                                                        <td>$categoryName</td>
                                                        <td>$$priceExclTax</td>
                                                        <td>$$priceInclTax</td>
                                                        <td>$quantity</td>
                                                        <td>$active</td>
                                                        <td>
                                                            <a href='product_up.php?id=$id'>Editar</a> | 
                                                            <a href='delete_product.php?id=$id' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este producto?');\">Eliminar</a>
                                                        </td>
                                                    </tr>";
                                                } else {
                                                    echo "<tr>
                                                        <td>$id</td>
                                                        <td>No disponible</td>
                                                        <td>$name</td>
                                                        <td>$reference</td>
                                                        <td>$categoryName</td>
                                                        <td>$$priceExclTax</td>
                                                        <td>$$priceInclTax</td>
                                                        <td>$quantity</td>
                                                        <td>$active</td>
                                                        <td>
                                                            <a href='product_up.php?id=$id'>Editar</a> | 
                                                            <a href='delete_product.php?id=$id' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este producto?');\">Eliminar</a>
                                                        </td>
                                                    </tr>";
                                                }
                                            }
                                            // Cierra la tabla
                                            echo "</table>";
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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