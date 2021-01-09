<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>MonBank - your safety fortress</title>
	<!-- inlcude google open sans font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i%7COpen+Sans:400,400i,700,700i&display=swap" rel="stylesheet"> 
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageHeader -->
		<header id="pageHeader" class="position-absolute w-100 pt-3 pt-lg-6 pt-xl-10 pb-3">
			<div class="container">
				<!-- logo -->
				<div class="logo">
					<a href="/">
						<img src="images/logo.png" class="img-fluid" alt="image description">
					</a>
				</div>
			</div>
		</header>
		<main>
			<!-- introBlock -->
			<section id="form" class="introBlock d-flex w-100 text-center text-center text-white position-relative">
				<!-- ibHolder -->
				<div class="d-flex ibHolder align-items-center w-100">
					<div class="container py-14 py-lg-20 py-xl-23">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1">
								<div class="px-lg-3">
									
									<h1 class="text-white mb-3">Discover convenient banking</h1>
									<div class="row">
										<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
											<p class="mb-5 mb-lg-8">Avoid the queue or delays and try our simple and secure Internet Banking facility for an unmatched online banking experience.</p>
											<a href="/login" class="btn btnTheme text-uppercase align-top btnMinWidth">Sign in</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- svgBg -->
				<svg class="svgBg">
					<defs>
						<linearGradient id="grad01" x1="0" y1="0" x2="1" y2="0">
							<stop offset="0" style="stop-color:#0a0a0a" stop-opacity="0.6"></stop>
							<stop offset="1" style="stop-color:#0a0a0a" stop-opacity="0.6"></stop>
						</linearGradient>
						<filter id="blendMood01">
							<feFlood flood-color="#1fb4cc" class="color-test" result="tint"></feFlood>
							<feComposite operator="arithmetic" in="tint" in2="SourceGraphic" k1="1" result="multiply"></feComposite>
						</filter>
						
					</defs>
					<image style="clip-path: url(#path01); filter: url(#blendMood01);" width="100%" height="100%" xlink:href="https://c.wallhere.com/photos/93/4f/1920x1080_px_car_clouds_Dark_Desert_Dune_landscape_Lost-701283.jpg!d" preserveAspectRatio="xMidYMid slice"></image>
					<rect width="100%" height="100%" style="clip-path: url(#path01);" fill="url(#grad01)" fill-opacity="0.7"></rect>
				</svg>
			</section>
		
			<!-- <aside class="sponsorsAside text-center pt-4 pb-6 pt-md-9 pb-md-11">
				<div class="container">
					<p class="mb-10">Our partners</p>
					
					<div class="brandsSlider">
						
						<div>
							<div class="brandLogoWrap">
								<a href="javascript:void(0);">
									<img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/206_Mastercard_Credit_Card_logo_logos-128.png" class="img-fluid" alt="image description">
								</a>
							</div>
						</div>
						<div>
							<div class="brandLogoWrap">
								<a href="javascript:void(0);">
									<img src="http://placehold.it/150x55" class="img-fluid" alt="image description">
								</a>
							</div>
						</div>
						<div>
							<div class="brandLogoWrap">
								<a href="javascript:void(0);">
									<img src="http://placehold.it/150x55" class="img-fluid" alt="image description">
								</a>
							</div>
						</div>
						
						
					</div>
				</div>
			</aside> -->
			
		
			
		</main>
		<!-- pageFooter -->
		<footer id="pageFooter" class="text-center bgw-white py-5">
			<div class="container">
				<p class="mb-0">2021 &copy; <a href="/">MonBank</a> All rights are not reserved.</p>
			</div>
		</footer>
		<!-- back top of the page -->
		<span id="back-top" class="text-center rounded-circle fa fa-angle-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="images/svg/puff.svg" width="100" alt="loader"></div>			
		</div>
		<!-- Modal -->
		
	</div>
	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/formValidator.js"></script>
</body>
</html>