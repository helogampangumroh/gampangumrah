
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
							<h2 class="title">Daftar Akun</h2>
						</div>
					</div>
                    <form action="{{ route('register') }}" method="POST" id="reg_form">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group mb-3 {{ $errors->first('first_name', 'has-error') }}">
                                <label class="visually-hidden"> Nama Lengkap</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama Lengkap" value="{!! old('first_name') !!}">
                                {!! $errors->first('first_name', '<span class="form-text">:message</span>') !!}
                            </div>
                            <div class="form-group mb-3 {{ $errors->first('email', 'has-error') }}">
                                <label class="visually-hidden"> Email Aktif</label>
                                <input type="email" class="form-control" id="Email" name="email" placeholder="Email Aktif"
                                    value="{!! old('Email') !!}">
                                {!! $errors->first('email', '<span class="form-text">:message</span>') !!}
                            </div>
                            <div class="form-group mb-3 {{ $errors->first('password', 'has-error') }}">
                                <label class="visually-hidden"> Kata Sandi</label>
                                <input type="password" class="form-control" id="Password1" name="password"
                                    placeholder="Kata Sandi">
                                {!! $errors->first('password', '<span class="form-text">:message</span>') !!}
                            </div>
                            <div class="form-group mb-3 {{ $errors->first('password_confirm', 'has-error') }}">
                                <label class="visually-hidden"> Ulangi Kata Sandi</label>
                                <input type="password" class="form-control" id="Password2" name="password_confirm"
                                    placeholder="Ulangi Kata Sandi">
                                {!! $errors->first('password_confirm', '<span class="form-text">:message</span>') !!}
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group mb-3 {{ $errors->first('gender', 'has-error') }}">
                                <label class="visually-hidden">Jenis Kelamin</label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="gender" id="inlineRadio1" value="pria"> Pria
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="gender" id="inlineRadio2" value="wanita"> Wanita
                                    </label>
                                </div>
                                {!! $errors->first('gender', '<span class="form-text">:message</span>') !!}
                            </div>

                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                            <div class="d-grid"><input type="submit" class="btn  btn-primary" value="Daftar"></div>

                        </form>
                </div>

                <div class="bottom-btn mt-auto">
					<div class="dz-saprate">
						<span>Atau</span>
					</div>
					<div class="sub-title"><a href="{{ route('login') }}" class="btn-link">Masuk <i class="feather icon-log-in"></i></a></div>
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
