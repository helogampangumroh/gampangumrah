@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Color Picker
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/vanillapicker/css/vanilla-picker.csp.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Color picker slider</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">UI Features</a>
            </li>
            <li class="active">Color picker slider</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="eyedropper" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            Vanilla Color Picker
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body" id="card-bg">
                        <div class="mb-3">
                            <div id="picker1" class="btn fw-bold">
                                Click Here
                            </div>
                        </div>
                        <div class="mb-3 ms-2">
                            <label class="d-block">Getting Hex value</label>
                            <input type="text" id="color-input" value="#ff0000" />
                            <div id="picker2" class="btn fw-bold">Click Here</div>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="btn small text-primary" id="picker3"
                                data-color="rgb(255, 255, 255)"><strong>Change
                                    background color</strong></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <!--color picker slider-->
    <script src="{{ asset('vendors/vanillapicker/js/vanilla-picker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/color-picker.js') }}" type="text/javascript"></script>

@stop
