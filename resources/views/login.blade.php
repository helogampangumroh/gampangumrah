
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
    <link rel="stylesheet" type="text/css" href="front/css/style.css?v=2">

	<!-- Animte -->
    <link rel="stylesheet" href="front/vendor/wow/css/libs/animate.css">

    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../../css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/iCheck/css/all.css') }}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />

</head>
<body>
<div class="page-wrapper full-height">

    <!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="logo">
				<img src="front/images/app-logo/preloader/circle.svg" class="circle-vector" alt="">
				<img src="front/images/app-logo/preloader/islam.png" class="user-vector wow fadeInUpBig" alt="">
			</div>
		</div>
	</div>
    <!-- Preloader end-->

    <!-- Welcome Start -->
	<main class="page-content">
		<div class="container p-0">
			<div class="dz-authentication-area dz-flex-box">
                <div class="account-section">
					<a href="javascript:void(0);" class="back-btn dz-icon style-2 icon-light">
						<i class="feather icon-arrow-left"></i>
					</a>
					<div class="top-area">
						<div class="app-logo">
							<img src="front/images/app-logo/preloader/logo.png" alt="">
						</div>
						<div class="section-head">
                            <div id="notific">
                                @include('notifications')
                            </div>
							<h2 class="title">Masuk Ke Akun</h2>
						</div>
					</div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group mb-3 {{ $errors->first('email', 'has-error') }}">
                            <label class="visually-hidden">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="{!! old('email') !!}" required>
                            <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                        </div>
                        <div class="form-group mb-3 {{ $errors->first('password', 'has-error') }}">
                            <label class="visually-hidden">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <span class="form-text">{{ $errors->first('password', ':message') }}</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" name="remember-me"> Ingatkan Saya
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                            <a href="{{ route('forgot-password') }}" class="btn-link text-end d-block">Lupa Kata Sandi</a>
                            </div>
                        </div>
                        <div class="d-grid"><input type="submit" class="btn  btn-primary" value="Masuk"></div>
                    </form>
                </div>
                <div class="bottom-btn mt-auto">
					<div class="dz-saprate">
						<span>Atau</span>
					</div>
					<div class="sub-title"><a href="{{ route('register') }}" class="btn-link">Daftar Sekarang</a></div>
				</div>
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
<script src="front/js/settings.js"></script>
<script src="front/js/custom.js"></script>

<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/login_custom.js') }}"></script>

</body>
</html>
