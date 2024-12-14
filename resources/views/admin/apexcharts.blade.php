@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Apex Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('vendors/apexcharts/css/apexcharts.css') }}">
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Apex Charts
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Charts</a>
            </li>
            <li class="active">
                Apex Charts
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content p-3">
        <div class="row row-cols-lg-2 row-cols-1 ">
            <div class="col mb-2">
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>Line Charts</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="chart1" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Area Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart2" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Bar Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart3" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Combo Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart4" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Range Area Combo Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart5" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Funnel Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart7" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Candlestick Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart8" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Box & Whisker Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart9" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Radar Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart10" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Donut Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart11" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Simple Pie Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart12" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Bubble Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart13" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Scatter Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart14" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Heatmap Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart15" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Treemap Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart16" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Slope Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart17" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Timeline Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart6" class="h350"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->

    </section>

@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script type="text/javascript" src="{{ asset('vendors/apexcharts/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/pages/apexcharts.js') }}"></script>

    <!-- end of page level js -->
@stop
