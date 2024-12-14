@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Vector Maps
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('css/pages/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')
    <!-- Main content -->
    <section class="content ps-3 pe-3">
        <div class="row">
            <div class="col-lg-6 col-12 col-md-6 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>World</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="vmapworld" class="map_size"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-info text-white">
                        <span>USA</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="vmapusa" class="map_size"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>Europe</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="vmapeurope" class="map_size"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-danger text-white ">
                        <span>Germany</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="vmapgermany" class="map_size"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12 col-12 col-md-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>Russia</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="vmaprussia" class="map_size"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </section>
    <!--page wrapper-->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.usa.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.europe.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.germany.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.russia.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('js/pages/vectormaps.js') }}" type="text/javascript"></script>

@stop
