
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
	<link rel="stylesheet" href="front/vendor/jquerySmartWizard/css/smart_wizard_all.min.css">
    <link rel="stylesheet" type="text/css" href="front/css/style.css?v=2">

	<!-- Animte -->
    <link rel="stylesheet" href="front/vendor/wow/css/libs/animate.css">

    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../../css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

</head>
<body class="dz-gradient">
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
							<h2 class="title text-white">Form Pendaftaran</h2>
						</div>
					</div>
					<div class="dz-wizard dz-flex-box" id="smartwizard">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#step-1">
									<div class="num">1</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#step-2">
									<span class="num">2</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#step-3">
									<span class="num">3</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="#step-4">
									<span class="num">4</span>
								</a>
							</li>
						</ul>

                        <form action="{{ route('register') }}" method="POST" id="reg_form">

						<div class="tab-content">
							<div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
								<div class="inner-content">
									<h2 class="title">Isi Biodata</h2>

                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group mb-3 {{ $errors->first('first_name', 'has-error') }}">
                                        <label class="visually-hidden"> Nama Lengkap</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama Lengkap" value="{!! old('first_name') !!}">
                                        {!! $errors->first('first_name', '<span class="form-text">:message</span>') !!}
                                    </div>
                                    <div class="form-group mb-3 {{ $errors->first('email', 'has-error') }}">
                                        <label class="visually-hidden"> Email</label>
                                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
                                            value="{!! old('Email') !!}">
                                        {!! $errors->first('email', '<span class="form-text">:message</span>') !!}
                                    </div>
                                    <div class="form-group mb-3 {{ $errors->first('password', 'has-error') }}">
                                        <label class="visually-hidden"> Password</label>
                                        <input type="password" class="form-control" id="Password1" name="password"
                                            placeholder="Password">
                                        {!! $errors->first('password', '<span class="form-text">:message</span>') !!}
                                    </div>
                                    <div class="form-group mb-3 {{ $errors->first('password_confirm', 'has-error') }}">
                                        <label class="visually-hidden"> Confirm Password</label>
                                        <input type="password" class="form-control" id="Password2" name="password_confirm"
                                            placeholder="Confirm Password">
                                        {!! $errors->first('password_confirm', '<span class="form-text">:message</span>') !!}
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group mb-3 {{ $errors->first('gender', 'has-error') }}">
                                        <label class="visually-hidden">Gender</label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                            <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                                            </label>
                                        </div>
                                        {!! $errors->first('gender', '<span class="form-text">:message</span>') !!}
                                    </div>

									<div class="row mb-3">
										<div class="col-12">
											<div class="form-group mb-3">
												<label for="FormName" class="form-label required">List Kementrian</label>
												<select class="form-select">
													<option value="0">Kementrian Kesehatan</option>
													<option value="1">Kementrian Luar Negeri</option>
													<option value="2">Kementrian Dalam Negeri</option>
													<option value="3">Kementrian pertanian</option>
													<option value="4">Kementrian Dalam Negeri</option>
													<option value="5">A/N Pribadi</option>
												</select>
											</div>

											<div class="form-group mb-3">
												<label class="form-label required">No. KTP</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">No. Passport</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">Tanggal Lahir</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">Tempat Lahir</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label for="FormName" class="form-label required">Status Pernikahan</label>
												<select class="form-select">
													<option value="0">Lajang</option>
													<option value="1">Menikah</option>
													<option value="3">Cerai</option>
													<option value="4">Lainnya</option>
												</select>
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">No. Telp</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">No. Handphone</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">Username Instagram</label>
												<input type="number" class="form-control">
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">Alamat Facebook</label>
												<input type="number" class="form-control">
											</div>

										</div>
									</div>
									<h2 class="title">Rekening Bank</h2>
									<div class="row mb-3">
										<div class="col-12">
											<div class="form-group mb-3">
												<label class="form-label required">Nama Bank</label>
												<select class="form-select">
													<option value="0">BCA</option>
													<option value="1">Mandiri</option>
													<option value="2">BNI</option>
													<option value="3">BRI</option>
												</select>
											</div>
											<div class="form-group mb-3">
												<label class="form-label required">Atas Nama</label>
												<input type="text" class="form-control" >
											</div>
											<div class="form-group mb-3">
												<label for="FormPassword" class="form-label required">Nomor Rekening</label>
												<input type="number" class="form-control" >
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
								<div class="inner-content">
									<h2 class="title">Pilih Paket</h2>
									<div class="row mb-3">
										<div class="col-12">
											<div class="form-check custom-check style-2 mb-3">
												<div class="dz-card card style-2 mb-3">
													<div class="card-body">
														<div class="card-info">
															<div class="c-logo">
																<img src="front/images/app-logo/preloader/islam.png" alt="">
															</div>
															<div class="card-content">
																<div class="d-flex align-items-center gap-2">
																	<input type="radio" class="btn-check" name="selectCheck" id="selectCheck1" autocomplete="off" checked>
																	<label class="btn gap-2" for="selectCheck1">
																		<span class="check"><i class="fi fi-br-check"></i></span>Paket Umroh Ekonomi<br>
																	</label>
																</div>
															</div>
														</div>
														<div class="btn-group gap-2">
															<a href="javascript:void(0);" class="btn btn-sm px-2 btn-light text-secondary lh-1">Quard</a>
															<a href="javascript:void(0);" class="btn btn-sm px-2 btn-light text-secondary lh-1">Triple</a>
															<a href="javascript:void(0);" class="btn btn-sm px-2 btn-light text-secondary lh-1">Double</a>
														</div>
													</div>
													<div class="card-footer">
														<div class="left-content"><span class="location"><i class="feather icon-tag"></i>Rp.29.000.000</span></div>
														<div class="right-content"><span class="time">Keberangkatan 12-12-2024</span></div>
													</div>
													<div class="card-footer">
														<div class="left-content"><span class="location">Tiket PP, Visa Umrah & Tasreh Raudah, Hotel Makkah Madinah, Makan 3x sehari, Transportasi Bus AC, Handling CGK & Saudi, Snack Ziaroh Tour, Air Zamzam, Muthowwif, Tour Leader, Perlengkapan Umroh, Asuransi Perjalanan dan Siskopatuh.</span></div>
														<div class="right-content"><span class="time"><a class="mt-2" href="https://bunny-wp-pullzone-lsuzq7cuhn.b-cdn.net/wp-content/uploads/2024/08/WhatsApp-Image-2024-08-05-at-16.03.59.jpeg" target="_BLANK">Lihat Brosur</a></span></div>
													</div>
												</div>
											</div>
											<div class="form-check custom-check style-2 mb-3">
												<div class="dz-card card style-2 mb-3">
													<div class="card-body">
														<div class="card-info">
															<div class="c-logo">
																<img src="front/images/app-logo/preloader/islam.png" alt="">
															</div>
															<div class="card-content">
																<div class="d-flex align-items-center gap-2">
																	<input type="radio" class="btn-check" name="selectCheck" id="selectCheck2" autocomplete="off">
																	<label class="btn gap-2" for="selectCheck2">
																		<span class="check"><i class="fi fi-br-check"></i></span>Paket Haji Premium
																	</label>
																</div>
															</div>
														</div>
														<div class="btn-group gap-2">
															<a href="javascript:void(0);" class="btn btn-sm px-2 btn-light text-secondary lh-1">Quard</a>
															<a href="javascript:void(0);" class="btn btn-sm px-2 btn-light text-secondary lh-1">Triple</a>
															<a href="javascript:void(0);" class="btn btn-sm px-2 btn-light text-secondary lh-1">Double</a>
														</div>
													</div>
													<div class="card-footer">
														<div class="left-content"><span class="location"><i class="feather icon-tag"></i>Rp.200.000.000</span></div>
														<div class="right-content"><span class="time">Keberangkatan 12-12-2025</span></div>
													</div>
													<div class="card-footer">
														<div class="left-content"><span class="location">Tiket PP, Visa Umrah & Tasreh Raudah, Hotel Makkah Madinah, Makan 3x sehari, Transportasi Bus AC, Handling CGK & Saudi, Snack Ziaroh Tour, Air Zamzam, Muthowwif, Tour Leader, Perlengkapan Umroh, Asuransi Perjalanan dan Siskopatuh.</span></div>
														<div class="right-content"><span class="time"><a class="mt-2" href="https://bunny-wp-pullzone-lsuzq7cuhn.b-cdn.net/wp-content/uploads/2024/08/WhatsApp-Image-2024-08-05-at-16.03.59.jpeg" target="_BLANK">Lihat Brosur</a></span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
								<div class="inner-content">
									<h2 class="title">Pembayaran</h2>
									<h5 class="text-center"><small>Jumlah Total</small><br><b class="text-success">IDR 30.000.000</b></h5>
									<hr>
									<p class="text-center">Bayar Sebelum : <b>10-10-2024</b> 10:00:00 WIB</p>
									<hr>
									<div class="row mb-3">
										<div class="col-12">
											<div class="accordion dz-accordion style-3" id="accordionExample">
												<div class="accordion-item">
													<h6 class="accordion-header">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Transfer Bank
														</button>
													</h6>
													<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<p class="m-b0">BCA</p>
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h6 class="accordion-header">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">VA Payment</button>
													</h6>
													<div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<p class="m-b0">VA BCA</p>
															<p class="m-b0">VA BNI</p>
															<p class="m-b0">VA BRI</p>
															<p class="m-b0">VA MANDIRI</p>
															<p class="m-b0">VA PERMATA</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
								<div class="inner-content">
									<h2 class="title">Informasi Keberangkatan</h2>
									<div class="job-card">
										<ul>
											<li>
												<i class="feather icon-check"></i>
												<span>No. Invoice</span>
											</li>
											<li>
												<span>123456789</span>
											</li>
											<li>
												<i class="feather icon-check"></i>
												<span>Tanggal Keberangkatan</span>
											</li>
											<li>

												<span>19 Maret 2025</span>
											</li>

											<li>
												<i class="feather icon-check"></i>
												<span>Harga</span>
											</li>
											<li>
												<span>Rp.30.000.000</span>
											</li>
											<li>
												<i class="feather icon-check"></i>
												<span>Paket</span>
											</li>
											<li>
												<span>Paket Umrah Ekonomi</span>
											</li>
											<li>
												<i class="feather icon-check"></i>
												<span>Hotel</span>
											</li>
											<li>
												<span>Madinah **** (4)</span>
											</li>
										</ul>
										<div class="dz-media">
											<img src="https://cdn-icons-png.flaticon.com/128/190/190411.png" alt="">
										</div>
									</div>
									<ul class="dz-timeline mb-4 mt-4">
										<li class="timeline-item">
											<div class="active-box">
												<h6 class="timeline-tilte">Pulang</h6>
											</div>
										</li>
										<li class="timeline-item">
											<div class="active-box">
												<h6 class="timeline-tilte">Berangkat</h6>
											</div>
										</li>
										<li class="timeline-item active">
											<div class="active-box">
												<h6 class="timeline-tilte">Jadwal Keberangkatan</h6>
											</div>
										</li>
										<li class="timeline-item">
											<div class="active-box">
												<h6 class="timeline-tilte">Pembayaran Diterima</h6>
											</div>
										</li>
										<li class="timeline-item">
											<div class="active-box">
												<h6 class="timeline-tilte">Pembayaran</h6>
											</div>
										</li>
										<li class="timeline-item">
											<div class="active-box">
												<h6 class="timeline-tilte">Pendaftaran</h6>
											</div>
										</li>
									</ul>

								</div>
							</div>
						</div>

                        <input type="checkbox" name="subscribed" class="form-check-input d-none" checked>
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        <button type="submit" class="d-none" id="buttonsubmit">Submit</button>

                        </form>

					</div>
                </div>

			</div>
		</div>
	</main>
    <!-- Welcome End -->

</div>
<!--**********************************
    Scripts
***********************************-->
<script src="front/js/jquery.js"></script>
<script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="front/vendor/jquerySmartWizard/js/jquery.smartWizard.min.js"></script>
<script src="front/js/settings.js"></script>
<script src="front/js/custom.js"></script>
<script type="text/javascript" src="{{ asset('js/frontend/register_custom.js') }}"></script>
<script>
	$(document).ready(function () {
        $('#smartwizard').smartWizard();
        $('#smartwizard').on('showStep', function (e, anchorObject, stepIndex, stepDirection) {
            if (stepIndex === 3) {
                $('.sw-btn-next').off('click').on('click', function () {
                    $('#buttonsubmit').click();
                    $(this).css('pointer-events', 'unset');
                });
            } else {
                $('.sw-btn-next').off('click');
            }
        });
        $('.sw-btn-prev').html('<i class="fas fa-arrow-left"></i>');
    });
</script>
</body>
</html>
