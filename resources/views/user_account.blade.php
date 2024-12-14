
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

	<!-- PWA Version -->
	<link rel="manifest" href="manifest.json">

    <!-- Global CSS -->
	<link href="front/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="front/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" href="front/vendor/nouislider/nouislider.min.css">
	<link rel="stylesheet" href="front/vendor/swiper/swiper-bundle.min.css">

	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="front/css/style.css?v=2">

    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../../css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

</head>
<body>
<div class="page-wrapper">

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

	<!-- Header -->
	<header class="header style-2 header-fixed">
		<div class="header-content">
			<div class="left-content location">
				<a href="javascript:void(0);" class="toggle-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
					<svg width="22" height="16" viewbox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect width="22" height="2" fill="var(--bs-body-color)"></rect>
						<rect y="7" width="16" height="2" fill="var(--bs-body-color)"></rect>
						<rect y="14" width="22" height="2" fill="var(--bs-body-color)"></rect>
					</svg>
				</a>
			</div>
			<div class="mid-content px-3">

			</div>
			<div class="right-content d-flex align-items-center">
				<a href="#">
					<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="var(--bs-body-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="var(--bs-body-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
			</div>
		</div>
	</header>
	<!-- Header -->

	<!-- Sidebar -->
    <div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
		<div class="offcanvas-header">
			<div class="author-box">
				<div class="dz-media">
					<img src="front/images/avatar/1.png" alt="author-image">
				</div>
				<div class="dz-info flex-1">
					<h6 class="name">{!! old('first_name', $user->first_name) !!}</h6>
                    @if($user->gender === 'male')
					<span class="about">Pria</span>
                    @else
                    <span class="about">Wanita</span>
                    @endif
				</div>
				<a class="edit ms-auto" href="#">
					<svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.333 2.00001C11.5081 1.82491 11.716 1.68602 11.9447 1.59126C12.1735 1.4965 12.4187 1.44772 12.6663 1.44772C12.914 1.44772 13.1592 1.4965 13.3879 1.59126C13.6167 1.68602 13.8246 1.82491 13.9997 2.00001C14.1748 2.1751 14.3137 2.38297 14.4084 2.61175C14.5032 2.84052 14.552 3.08572 14.552 3.33334C14.552 3.58096 14.5032 3.82616 14.4084 4.05494C14.3137 4.28371 14.1748 4.49158 13.9997 4.66667L4.99967 13.6667L1.33301 14.6667L2.33301 11L11.333 2.00001Z" stroke="#1967D2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
			</div>
		</div>
		<div class="offcanvas-body">
			<div class="sidebar-list">
				<ul>
					<li>
						<a href="#" class="item-link">
							<div class="dz-icon">
								<i class="feather icon-home"></i>
							</div>
							<span class="title">Depan</span>
						</a>
					</li>
					<li>
						<a href="" class="item-link">
							<div class="dz-icon">
								<i class="feather icon-bookmark"></i>
							</div>
							<span class="title">Riwayat</span>
						</a>
					</li>
					<li>
						<a href="" class="item-link">
							<div class="dz-icon">
								<i class="feather icon-bell"></i>
							</div>
							<span class="title">Notifikasi</span>
						</a>
					</li>
					<li>
						<a href="" class="item-link">
							<div class="dz-icon">
								<i class="feather icon-user"></i>
							</div>
							<span class="title">Profil</span>
						</a>
					</li>
					<li>
						<a href="{{ route('logout') }}" class="item-link">
							<div class="dz-icon">
								<i class="feather icon-log-out"></i>
							</div>
							<span class="title">Keluar</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    <!-- Sidebar End -->

	<!-- Main Content Start -->
	<main class="page-content space-top space-bottom">
		<div class="container">
			<div class="jb-tips-card">
				<h6 class="title">Assalamualaikum, <small>Mau Umrah Atau Haji?</small></h6>
				<a href="javascript:void(0);" class="btn btn-sm btn-primary lh-1 rounded-2 btn-shadow">Iya, Saya Mau</a>
				<div class="dz-media" style=" width: 90px;">
					<img src="https://cdn-icons-png.flaticon.com/128/10368/10368293.png" style=" height: 90px; width: auto; " alt="">
				</div>
			</div>
			<div class="title-bar">
				<h6 class="title">Riwayat Pemesanan</h6>
			</div>
			<div class="row g-3">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="dz-card card style-2">
						<div class="card-body">
							<div class="card-info">
								<div class="c-logo">
									<img src="front/images/app-logo/preloader/islam.png" alt="">
								</div>
								<div class="card-content">
									<h5 class="title"><a href="{{ route('register') }}#step-4">Paket Umroh Ekonomi</a></h5>
									<div class="d-flex align-items-center gap-2">
										<div class="c-review"><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i></div>
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
							<div class="left-content"><span class="location"><i class="feather icon-tag"></i>Rp.30.000.000</span></div>
							<div class="right-content"><span class="time">10-10-2024</span></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="dz-card card style-2">
						<div class="card-body">
							<div class="card-info">
								<div class="c-logo">
									<img src="front/images/app-logo/preloader/islam.png" alt="">
								</div>
								<div class="card-content">
									<h5 class="title"><a href="{{ route('register') }}#step-4">Paket Haji Premium</a></h5>
									<div class="d-flex align-items-center gap-2">
										<div class="c-review"><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i><i class="feather icon-star-on"></i></div>
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
							<div class="right-content"><span class="time">10-10-2024</span></div>
						</div>
					</div>
				</div>
			</div>

            <hr>

            <div class="title-bar">
				<h6 class="title">Update Profile</h6>
			</div>
            <div class="row g-3">
                <div class="col-12 col-md-12">

                    <div id="notific">
                        @include('notifications')
                    </div>

                    {!! Form::model($user, [
                    'url' => URL::to('my-account'),
                    'method' => 'put',
                    'class' => 'form-horizontal',
                    'enctype' => 'multipart/form-data',
                    ]) !!}
                    {{ csrf_field() }}
                    <div class="mb-3 {{ $errors->first('pic', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail max-width-height2">
                                    @if ($user->pic)
                                    <img src="{{ $user->pic }}" alt="img" class="img-fluid" />
                                    @elseif($user->gender === 'male')
                                    <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                        class="img-fluid" />
                                    @elseif($user->gender === 'female')
                                    <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                        class="img-fluid" />
                                    @else
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                        class="img-fluid" />
                                    @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail max-width-height1"></div>
                                    <div>
                                    <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="pic" id="pic" />
                                    </span>
                                    <span class="btn btn-primary fileinput-exists"
                                        data-dismiss="fileinput">Remove</span>
                                    </div>
                                </div>
                                <span class="form-text">{{ $errors->first('pic', ':message') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('first_name', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label">
                            Nama Lengkap:
                            <span class='require'>*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="input-group">

                                <input type="text" placeholder=" " name="first_name" id="first_name"
                                class="form-control" value="{!! old('first_name', $user->first_name) !!}">
                            </div>
                            <span class="form-text">{{ $errors->first('first_name', ':message') }}</span>
                        </div>
                    </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('email', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label">
                            Email:
                            <span class='require'>*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="input-group">

                                <input type="text" placeholder=" " id="email" name="email"
                                class="form-control" value="{!! old('email', $user->email) !!}">
                            </div>
                            <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('password', 'has-error') }}">
                    <p class="text-warning col-md-offset-2"><strong>If you don't want to change password... please
                        leave them empty</strong>
                    </p>
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label">
                            Password:
                            <span class='require'>*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="input-group ">

                                <input type="password" name="password" placeholder=" " id="pwd"
                                class="form-control">
                            </div>
                            <span class="form-text">{{ $errors->first('password', ':message') }}</span>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('password_confirm', 'has-error') }}">
                    <div class="row">
                        <label class="col-lg-2  col-12 form-label">
                        Confirm Password:
                        <span class='require'>*</span>
                        </label>
                        <div class="col-lg-10 col-12">
                            <div class="input-group ">

                                <input type="password" name="password_confirm" placeholder=" " id="cpwd"
                                class="form-control">
                            </div>
                            <span class="form-text">{{ $errors->first('password_confirm', ':message') }}</span>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label">Gender: </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="radio">
                                <label>
                                <input type="radio" name="gender" value="male"
                                @if ($user->gender === 'male') checked="checked" @endif />
                                Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="gender" value="female"
                                @if ($user->gender === 'female') checked="checked" @endif />
                                Female
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="gender" value="other"
                                @if ($user->gender === 'other') checked="checked" @endif />
                                Other
                                </label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3  {{ $errors->first('bio', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label for="" class="form-label">Bio <small>(brief intro):</small></label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <textarea name="bio" id="bio" class="form-control resize_vertical h100">{!! old('bio', $user->bio) !!}</textarea>
                        </div>
                        {!! $errors->first('bio', '<span class="form-text">:message</span>') !!}
                    </div>
                    </div>
                    <div>
                    <h3 class="text-primary" id="title">Contact: </h3>
                    </div>
                    <div class="mb-3 {{ $errors->first('address', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label">
                            Address:
                            </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <textarea class="form-control resize_vertical h120" id="add1" name="address">{!! old('address', $user->address) !!}</textarea>
                        </div>
                        <span class="form-text">{{ $errors->first('address', ':message') }}</span>
                    </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('country', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label">Select Country: </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            {!! Form::select('country', $countries, $user->country, [
                            'class' => 'form-control select2',
                            'id' => 'countries',
                            ]) !!}
                            <span class="form-text">{{ $errors->first('country', ':message') }}</span>
                        </div>
                    </div>
                    </div>
                    <div class=" {{ $errors->first('user_state', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class="form-label" for="state">State:</label>
                        </div>
                        <div class="col-lg-10 col-12 col-md-12 col-sm-12 ">
                            <div class="input-group">

                                <input type="text" placeholder=" " id="state" class="form-control"
                                name="user_state" value="{!! old('user_state', $user->user_state) !!}" />
                            </div>
                        </div>
                        <span class="form-text">{{ $errors->first('user_state', ':message') }}</span>
                    </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('city', 'has-error') }}">
                    <div class="row">
                    <div class="col-lg-2 col-12">
                        <label class="form-label" for="city">City:</label>
                    </div>
                    <div class="col-lg-10 col-12">
                        <div class="input-group ">

                            <input type="text" placeholder=" " id="city" class="form-control"
                                name="city" value="{!! old('city', $user->city) !!}" />
                        </div>
                    </div>
                    <span class="form-text">{{ $errors->first('city', ':message') }}</span>
                    </div>
                    <div class="mb-3 {{ $errors->first('postal', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class=" form-label" for="postal">Postal:</label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="input-group">

                                <input type="text" placeholder=" " id="postal" class="form-control"
                                name="postal" value="{!! old('postal', $user->postal) !!}" />
                            </div>
                            <span class="form-text">{{ $errors->first('postal', ':message') }}</span>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('dob', 'has-error') }}">
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <label class= "form-label"> DOB:
                            </label>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="input-group">

                                @if ($user->dob === '')
                                {!! Form::text('dob', null, ['id' => 'datepicker', 'class' => 'form-control']) !!}
                                @else
                                {!! Form::text('dob', old('dob', $user->dob), [
                                'id' => 'datepicker',
                                'class' => 'form-control',
                                'data-date-format' => 'YYYY-MM-DD',
                                ]) !!}
                                @endif
                            </div>
                            <span class="form-text">{{ $errors->first('dob', ':message') }}</span>
                        </div>
                    </div>
                    </div>
                    <div class="">
                    <div class="col-lg-10 col-12 ms-auto">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>

		</div>
	</main>
	<!-- Main Content End -->

	<!-- Menubar -->
	<div class="menubar-area footer-fixed">
		<div class="toolbar-inner menubar-nav">
			<a href="{{ route('my-account') }}" class="nav-link active">
				<i class="feather icon-home"></i>
				<span class="name">Depan</span>
			</a>
			<a href="#" class="nav-link">
				<i class="feather icon-bookmark"></i>
				<span class="name">Riwayat</span>
			</a>
			<a href="#" class="nav-link">
				<i class="feather icon-user"></i>
				<span class="name">Profil</span>
			</a>
		</div>
	</div>
	<!-- Menubar -->

</div>
<!--**********************************
    Scripts
***********************************-->
<script src="front/js/jquery.js"></script>
<script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="front/vendor/swiper/swiper-bundle.min.js"></script>
<script src="front/js/ic.carousel.js"></script>
<script src="front/js/settings.js"></script>
<script src="front/js/custom.js"></script>

</body>
</html>
