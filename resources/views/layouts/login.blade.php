<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Сбербанк - @yield('title')</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		
		<!-- Toggles CSS -->
		<link href="/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
		<link href="/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="/dist/css/style.css" rel="stylesheet" type="text/css">

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
	</head>
	<body>
		
		
		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
									<a class="d-flex auth-brand align-items-center justify-content-center  mb-20" href="#">
										<img class="brand-img d-inline-block mr-5 logo-width" style="width: 200px" src="dist/img/logo.png" alt="brand" />
									</a>
                                    @yield('content')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
		<!-- jQuery -->
        <script src="/vendors/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Jasny-bootstrap  JavaScript -->
        <script src="/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

        <!-- Slimscroll JavaScript -->
        <script src="/dist/js/jquery.slimscroll.js"></script>

        <!-- Fancy Dropdown JS -->
        <script src="/dist/js/dropdown-bootstrap-extended.js"></script>

        <!-- FeatherIcons JavaScript -->
        <script src="/dist/js/feather.min.js"></script>

        <!-- Toggles JavaScript -->
        <script src="/vendors/jquery-toggles/toggles.min.js"></script>
        <script src="/dist/js/toggle-data.js"></script>

        <!-- Init JavaScript -->
        <script src="/dist/js/init.js"></script>
        <script src="/dist/js/validation-data.js"></script>
	</body>
</html>