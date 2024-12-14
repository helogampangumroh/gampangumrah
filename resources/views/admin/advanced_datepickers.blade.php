@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Advanced Date and Time pickers
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/airDatepicker/css/air-datepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/flatpickr/css/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/adv_date_pickers.css') }}" rel="stylesheet" type="text/css" />
@stop


{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Advanced Date picker slider</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Advanced Date and Time pickers</li>
        </ol>
    </section>
    <!--section ends-->
    <!-- Main content -->
    <section class="content ps-3 pe-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header bg-success text-white ">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Date Pickers
                        </span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable text-white"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="mb-3">
                                <label for="fancy">
                                    Date Selector :
                                </label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="flatpickr flatpickr-input form-control" type="text"
                                        placeholder="select date">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- Date dd/mm/yyyy -->
                            <div class="mb-3">
                                <label for="fancy">
                                    Textual Format :
                                </label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr" data-dateFormat="l, F j, Y" id="textual">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- phone mask -->
                            <div class="mb-3">
                                <label for="min_max">
                                    MinDate and MaxDate: (from today to next 14days)
                                </label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr" data-mindate=today data-maxdate='2017-12-31'
                                        id="min_max">
                                </div>
                            </div>
                            <!-- /.input group -->
                            <!-- /.form group -->
                            <!-- phone mask -->
                            <div class="mb-3">
                                <label for="elements">
                                    Custom Elements and Input Groups :
                                </label>
                                <div>
                                    <p class="flatpickr input-group" data-wrap="true" data-clickOpens="false">
                                        <input class="form-control" placeholder="Pick date" data-input id="elements">
                                        <span class="input-group-text add-on">
                                            <a class="input-btn" data-bs-toggle>
                                                <spanremove_radius"> <i class="livicon" data-name="calendar" data-size="23"
                                                        data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                        </a>
                                        </span>
                                        <span class="input-group-text add-on">
                                            <a class="input-btn" data-clear>
                                                <span><i class="livicon" data-name="remove" data-size="23"
                                                        data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                            </a>
                                        </span>
                                    </p>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- IP mask -->
                            <div class="mb-3">
                                <label for="datetimepicker">DateTime Picker With 24 Hour Mode:</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr" data-enabletime=true data-time_24hr=true
                                        data-timeFormat="H:i" id="datetimepicker">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="mb-3">
                                <label for="datetimepicker">Multiple dates</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr flatpickr-input active" type="text"
                                        data-id="multiple" placeholder="select multiple dates" id="multiple">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--select2 starts-->
                <div class="card my-3">
                    <div class="card-header bg-primary text-white ">
                        <span>
                            <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Advanced Date Pickers
                            </h3>
                            <span class="float-end ">
                                <i class="fa fa-chevron-up clickable"></i>
                            </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <!--  Multiple Dates -->
                            <div class="mb-3">
                                <label for="multiple">
                                    Multiple Dates
                                </label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span> <i class="livicon" data-name="phone" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input type="text" class="datepicker-here form-control" data-language='en'
                                        data-multiple-dates="4" data-multiple-dates-separator=", "
                                        data-position='bottom left' id="multiple" />
                                </div>
                            </div>
                            <!-- /.input group -->
                            <!-- Disabled Days -->
                            <div class="mb-3">
                                <label for="disable">
                                    Disabled Days:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="datepicker-here form-control" id="disabled-days">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- phone mask -->
                            <div class="mb-3">
                                <label for="actions">
                                    Actions with time:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span><i class="livicon" data-name="phone" data-size="16" data-c="#555555"
                                                data-hc="#555555" data-loop="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="datepicker-here form-control" data-timepicker="true"
                                        data-time-format="hh:ii aa" id="timepicker-actions-exmpl">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- IP mask -->
                            <div class="mb-3">
                                <label>Custom cells content:</label>
                                <div class="example">
                                    <div class="example--label"></div>
                                    <div class="example-content">
                                        <div class="list-inline">
                                            <div>
                                                <div id="custom-cells">
                                                </div>
                                            </div>
                                            <div class="calender-content-style" id="custom-cells-events"><strong
                                                    class="text-primary">04/10/2018</strong>
                                                <p class="light-color">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ita prorsus, inquam; Si enim ad populum me vocas, eum. Ita
                                                    prorsus, inquam; Nonne igitur tibi videntur, inquit, mala? Hunc vos
                                                    beatum; Idemne, quod iucunde? </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--select2 starts-->
                <div class="card ">
                    <div class="card-header bg-info text-white">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="23" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Custom Date Pickers
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="disableRangeMultiple">Disable Date Intervals: (3rd, 5th, 7th-10 dates from today
                                are disabled)</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span>
                                        <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control" id="disableRangeMultiple">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="mb-3">

                            <label for="check_in_date">Check-In, Check-out Date Picker:</label>

                            <div class="row">
                                <div class="col-sm-5 pad-0-res">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <span><i class="livicon" data-name="calendar" data-size="16"
                                                    data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                        </div>
                                        <input class="form-control" id="check_in_date" placeholder="Check-In Date">
                                    </div>
                                </div>
                                <div class="col-sm-5 pad-0-res">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <span><i class="livicon" data-name="calendar" data-size="16"
                                                    data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                        </div>
                                        <input class="form-control" id="check_out_date" placeholder="Check Out Date">
                                    </div>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="mb-3">
                            <label for="display">Display Week Numbers:</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-weeknumbers=true
                                    placeholder="Enabled week numbers" id="display">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="mb-3">
                            <label for="preload">Preload Date and Time:</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-defaultDate="2016-03-01 03:30:00 -0300"
                                    data-enableTime="true" id="preload">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.input group -->
                        <div class="mb-3">
                            <label for="datetimepicker">Range selector</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr flatpickr-input active" type="text"
                                    data-id="range" placeholder="select range" id="rangeflat">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <!--ends-->
                </div>
                <div class="card my-3">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Fancy Picker
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="timepicker">
                                Time Picker:
                            </label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span><i class="livicon" data-name="clock" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-enabletime=true data-nocalendar=true
                                    id="timepicker">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alt">
                                Human-friendly Date Output:
                            </label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-dateFormat=" F j, Y" id="alt"
                                    placeholder="The real input is hidden :^)" />
                            </div>
                            <strong>Selected date</strong>: <span id="realdate">nothing yet</span>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header bg-primary text-white ">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Date And Time Picker
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="date_picker">Date Picker:</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span><i class="livicon" data-name="laptop" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control datepicker1" type="text" placeholder="Try me.."
                                    id="date_picker">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="mb-3">
                            <label for="pickr">Time Picker:</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span> <i class="livicon" data-name="laptop" data-size="16" data-c="#555555"
                                            data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control timepicker" type="text" placeholder="Try me.."
                                    id="pickr">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!--ends-->
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <script src="{{ asset('vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/flatpickr/js/flatpickr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/airDatepicker/js/air-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom_datepicker.js') }}" type="text/javascript"></script>

@stop
