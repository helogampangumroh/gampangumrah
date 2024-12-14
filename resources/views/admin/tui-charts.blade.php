@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    TUI Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('vendors/toast-ui/css/toastui-chart.min.css') }}">
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            ToastUI Charts
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
                TUI-Charts
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content p-3">
        <div class="row row-cols-lg-2 row-cols-1 ">
            <div class="col mb-2">
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>Area Charts</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body h400">
                        <div id="chart" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Line Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body h400">
                        <div id="chart2" style="width:100%;height:100%"></div>
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
                    <div class="card-body h400">
                        <div id="chart3" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Column Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body h400">
                        <div id="chart4" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Bullet Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body h400">
                        <div id="chart5" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>BoxPlot Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body h400">
                        <div id="chart6" style="width:100%;height:100%"></div>
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
                    <div class="card-body h400">
                        <div id="chart7" style="width:100%;height:100%"></div>
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
                    <div class="card-body h400">
                        <div id="chart8" style="width:100%;height:100%"></div>
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
                    <div class="card-body h400">
                        <div id="chart9" style="width:100%;height:100%"></div>
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
                    <div class="card-body h400">
                        <div id="chart10" style="width:100%;height:100%"></div>
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
                    <div class="card-body h400">
                        <div id="chart11" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Pie Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body h400">
                        <div id="chart12" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->

    </section>

@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script type="text/javascript" src="{{ asset('vendors/toast-ui/js/toastui-chart.min.js') }}"></script>
    <script src="{{ asset('js/pages/tui-chart.js') }}"></script>

    <!-- end of page level js -->
@stop
