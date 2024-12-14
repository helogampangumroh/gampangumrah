<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.css') }}" />
<link href="{{ asset('vendors/iCheck/css/square/blue.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/login.css') }}" />
    <!-- end of page level css -->

</head>

<body>
    <div class="container">

        <div class="row mt-5">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4 mx-auto">

                <div id="notific">
                    @include('notifications')
                </div>

                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form pt-3">
                            <form action="{{ route('signin') }}" autocomplete="on" method="post" role="form"
                                id="login_form">
                                <h5 class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" alt="josh logo">
                                </h5>
                                <hr>
                                <h5 class="text-center">Login</h5>
                                <hr>
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group mb-2 {{ $errors->first('email', 'has-error') }}">
                                    <label for="email" class="uname form-label"> <i class="livicon" data-name="mail"
                                            data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="email" name="email" type="email" placeholder="E-mail"
                                        value="{!! old('email') !!}" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('email', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group mb-2 {{ $errors->first('password', 'has-error') }}">
                                    <label for="password" class="youpasswd"> <i class="livicon" data-name="key"
                                            data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password" name="password" type="password"
                                        placeholder="Enter a password" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('password', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember-me" id="remember-me" value="remember-me"
                                            class="square-blue" />
                                        Keep me logged in
                                    </label>
                                </div>
<div class="d-grid gap-2 mt-2">
                                    <input type="submit" value="Log In" class="btn btn-success" />
                                </div>
                                <p class="change_link">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-warning btn-sm">Forgot
                                            password
                                        </button>
                                    </a>

                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form action="{{ route('admin.signup') }}" autocomplete="on" method="post"
                                role="form" id="register_here">
                                <h5 class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" alt="josh logo">
                                </h5>
                                <hr>
                                <h5 class="text-center">Masuk</h5>
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                    <label for="first_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        First Name
                                    </label>
                                    <input id="first_name" name="first_name" required type="text"
                                        placeholder="John" value="{!! old('first_name') !!}" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('first_name', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group  {{ $errors->first('last_name', 'has-error') }}">
                                    <label for="last_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Last Name
                                    </label>
                                    <input id="last_name" name="last_name" required type="text" placeholder="Doe"
                                        value="{!! old('last_name') !!}" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('last_name', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group  {{ $errors->first('email', 'has-error') }}">
                                    <label for="email1" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="email1" name="email" value="{!! old('email') !!}" required
                                        type="email" placeholder="mysupermail@mail.com" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('email', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group  {{ $errors->first('email_confirm', 'has-error') }}">
                                    <label for="email_confirm" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Confirm E-mail
                                    </label>
                                    <input id="email_confirm" name="email_confirm" required type="email"
                                        placeholder="mysupermail@mail.com" value="{!! old('email_confirm') !!}" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('email_confirm', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group  {{ $errors->first('password', 'has-error') }}">
                                    <label for="password1" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password1" name="password" required type="password"
                                        placeholder="Password" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('password', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group  {{ $errors->first('password_confirm', 'has-error') }}">
                                    <label for="password_confirm" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Confirm Password
                                    </label>
                                    <input id="password_confirm" name="password_confirm" required type="password"
                                        placeholder="Confirm Password" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('password_confirm', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
<div class="d-grid gap-2 mt-2">
                                    <input type="submit" class="btn btn-success btn-block" value="Sign Up" />
</div>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-warning btn-sm">Back
                                        </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form action="{{ url('admin/forgot-password') }}" autocomplete="on" method="post"
                                role="form" id="reset_pw">
                                <h3 class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" alt="josh logo">
                                </h3>
                                <hr>
                                <h5>Forgot Password</h5>
                                <p class="fontsize14">
                                    Enter your email address below and we'll send a special reset password link to your
                                    inbox.
                                </p>

                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label for="email2" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Your email
                                    </label>
                                    <input id="email2" name="email" required type="email"
                                        placeholder="your@mail.com" value="{!! old('email') !!}" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('email', '<span class="form-text">:message</span>') !!}
                                    </div>
                                </div>
<div class="d-grid gap-2 mt-3">
                                    <input type="submit" value="Reset Password" class="btn btn-success" />
</div>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-warning btn-sm">Back
                                        </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- global js -->
@if (env('GOOGLE_RECAPTCHA_KEY'))
<script src='https://www.google.com/recaptcha/api.js'></script>
@endif
    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/login.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
</body>

</html>
