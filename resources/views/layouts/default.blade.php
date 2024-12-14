
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
	<title>PT. Gamal Hikmah Pusaka</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Indiancoder">
	<meta name="robots" content="index, follow">

	<meta name="keywords" content="GMP, job search app, mobile app template, Bootstrap template, PWA job app, recruitment app, job listings, employment platform, job seekers, responsive design">

	<meta name="description" content="GMP is a Bootstrap + PWA mobile app template designed for job searching and recruitment, offering a user-friendly interface for job seekers and employers.">

	<meta property="og:title" content="PT. Gamal Hikmah Pusaka | Dexignzone">

	<meta property="og:description" content="GMP is a Bootstrap + PWA mobile app template designed for job searching and recruitment, offering a user-friendly interface for job seekers and employers.">

	<meta property="og:image" content="https://jobboard.dexignzone.com/mobile/social-image.png">

	<meta name="format-detection" content="telephone=no">

	<!-- Twitter Specific -->
	<meta name="twitter:title" content="PT. Gamal Hikmah Pusaka | Dexignzone">

	<meta name="twitter:description" content="GMP is a Bootstrap + PWA mobile app template designed for job searching and recruitment, offering a user-friendly interface for job seekers and employers.">

	<meta name="twitter:image" content="https://jobboard.dexignzone.com/mobile/social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">

	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="front/images/app-logo/favicon.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="front/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="front/css/style.css?v=2">

	<!-- Animte -->
    <link rel="stylesheet" href="front/vendor/wow/css/libs/animate.css">

    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../../css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

</head>
<body>
<div class="page-wrapper full-height">

    <!-- splash -->
	<div class="loader-screen" id="splashscreen">
		<div class="main-screen">
			<div class="loader">
				<div class="logo">
					<img src="front/images/app-logo/preloader/circle.svg" class="circle-vector" alt="">
					<img src="front/images/app-logo/preloader/islam.png" class="user-vector wow fadeInUpBig" alt="">
				</div>
				<h1 class="logo-title">GMP</h1>
			</div>
		</div>
	</div>
	<!-- splash-->

    <!-- Welcome Start -->
	<main class="page-content">
		<div class="container p-0 position-relative">
			<div class="welcome-inner">
				<div class="top-section">
					<div class="bg-circle-shape">
						<div class="shape"></div>
						<div class="shape"></div>
						<div class="shape"></div>
					</div>
					<div class="badge-group">
						<div class="category-badge animate__animated animate__fadeInBottomRight  animate__delay-1s">
							<img src="front/images/welcome/vector/info.png" alt="svg">
							<span class="badge text-bg-info">HAJI</span>
						</div>
						<div class="category-badge animate__animated animate__fadeInBottomRight animate__delay-4s">
							<img src="front/images/welcome/vector/success.png" alt="svg">
							<span class="badge text-bg-success">UMROH</span>
						</div>
					</div>
					<div class="dz-media animate__animated animate__fadeInUp animate__delay-3s">
						<img src="front/images/welcome/umroh.png" alt="">
					</div>
				</div>
				<div class="get-started">
					<div class="bg-shape">
						<img id="theme-image" src="front/images/background/shape.svg" alt="bg-shape">
					</div>
					<!-- bottom Area -->
					<div class="swiper welcome-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="slide-info">
									<div class="started">
										<img src="front/images/icon.png" class="style-1" />
										<h1 class="title" data-swiper-parallax="-300"><b>GampangUmroh</b></h1>
										<p class="px-2" data-swiper-parallax="-100">Berangkat Umrah Dan Haji Bersama GampangUmrah Lebih Murah, Lebih Aman & Lebih Terpercaya.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- bottom Area -->
				</div>
			</div>
			<div class="bottom-btn">
				<a href="{{ route('register') }}" class="btn btn-flex w-100 btn-primary btn-shadow">Daftar Sekarang</a>
				<div class="sub-title">Sudah punya Akun? <a href="{{ route('login') }}" class="btn-link">Masuk</a></div>
			</div>
		</div>
	</main>
    <!-- Welcome End -->

    <br><br>

</div>
<!--**********************************
    Scripts
***********************************-->
<script src="front/js/jquery.js"></script>
<script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="front/vendor/wow/dist/wow.min.js"></script>
<script src="front/vendor/swiper/swiper-bundle.min.js"></script>
<script src="front/js/ic.carousel.js"></script>
<script src="front/js/settings.js"></script>
<script src="front/js/custom.js"></script>
<script>
    new WOW().init();
    var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       50,          // distance to the element when triggering the animation (default is 0)
      mobile:       false       // trigger animations on mobile devices (true is default)
    });
    wow.init();
</script>
</body>
</html>
