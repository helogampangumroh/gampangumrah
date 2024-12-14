@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Circle Sliders
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Circle sliders</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">UI Components</a>
            </li>
            <li class="active">Circle sliders</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="star-full" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            Circle Dials
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <!--knob-->
                        <div class="row visible-ie8">
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible">
                                    The Circle Dial plugin is not compatible with Internet Explorer 8 and older.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">Disable</div>
                                    <input class="knob" data-width="140" data-height="140" data-fgColor="#418bca"
                                        data-displayinput=false value="35">
                                </div>
                                <div class="col-md-3 col-sm-3 col-offset-2  col-10">
                                    <div class="text-start">Cursor</div>
                                    <input class="knob" data-width="140" data-height="140" data-cursor=true
                                        data-fgColor="#00bc8c" data-thickness=.3 value="29">
                                </div>
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">Display previous</div>
                                    <input class="knob" data-width="140" data-height="140" data-fgColor="#5bc0de"
                                        data-min="-100" data-displayprevious=true value="44">
                                </div>
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">Angle offset</div>
                                    <input class="knob" data-angleoffset="90" data-fgcolor="#EF6F6C" data-width="140"
                                        data-height="140" value="35">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">Angle offset arc</div>
                                    <input class="knob" data-angleoffset="-125" data-anglearc="250" data-fgcolor="#EF6F6C"
                                        data-width="140" data-height="140" value="35">
                                </div>
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">5-digit values</div>
                                    <input class="knob" data-min="-15000" data-fgColor="#5bc0de" data-max="15000"
                                        data-width="140" data-height="140" value="-11000">
                                </div>
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">Responsive</div>
                                    <input class="knob" data-width="140" data-height="140" data-fgColor="#00bc8c"
                                        value="35">
                                </div>
                                <div class="col-md-3 col-sm-3 col-offset-2 col-10">
                                    <div class="text-start">Readonly</div>
                                    <input class="knob" data-fgColor="#418bca" data-thickness=".4" data-width="140"
                                        data-height="140" readonly value="22">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--knob ends-->
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('vendors/jquery-knob/js/jquery.knob.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/knob_page.js') }}" type="text/javascript"></script>

@stop
