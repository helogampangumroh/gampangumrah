<!DOCTYPE html>
<html>

<head>
    <title>Admin Login | GHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('css/pages/login2.css') }}" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div
                class=" col-10 col-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="card ">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="card-title text-center">Forgot Password</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" class="form-horizontal">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <!-- New Password -->
                            <div class="form-group {{ $errors->first('password', ' has-error') }} col-sm-12">
                                <label for="password">@lang('auth/form.newpassword')</label>
                                <input type="password" name="password" id="password" value="{{ old('password') }}"
                                    class="form-control" />
                                {{ $errors->first('password', '<span class="form-text">:message</span>') }}
                            </div>

                            <!-- Password Confirm -->
                            <div class="form-group {{ $errors->first('password_confirm', ' has-error') }} col-sm-12">
                                <label class="form-label" for="password_confirm">@lang('auth/form.confirmpassword')</label>
                                <input type="password" name="password_confirm" id="password_confirm"
                                    value="{{ old('password_confirm') }}" class="form-control" />
                                {{ $errors->first('password_confirm', '<span class="form-text">:message</span>') }}
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a class="btn" href="{{ route('admin.dashboard') }}">@lang('button.cancel')</a>

                                    <button type="submit" class="btn btn-info">@lang('button.submit')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('js/frontend/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend/bootstrap.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="{{ asset('js/TweenLite.min.js') }}"></script>
    <script src="{{ asset('js/login2.js') }}"></script>
