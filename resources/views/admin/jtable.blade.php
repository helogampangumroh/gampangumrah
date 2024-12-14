@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    JTable
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('vendors/jtable/themes/metro/blue/jtable.css') }}" />
    <link href="{{ asset('css/pages/jtablemetroblue_jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/jtable.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>JTable </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Datatables</li>
            <li class="active">JTable</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content ps-3 pe-3">
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="card  ">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title mb-0">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff"
                                data-loop="true"></i>
                            JTable
                        </h4>
                        <span class="float-end">
                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                            <i class="fa fa-fw fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <br />
                    <div class="card-body">
                        <div class="filtering">

                            <form class="row row-cols-lg-auto g-3 align-items-center">
                                <div class="col-12">
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="name" id="fname" placeholder="First Name"
                                        class="form-control" />
                                </div>
                                <div class="col-12">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="lname" id="lname" placeholder="Last Name"
                                        class="form-control" />
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-3"
                                        id="LoadRecordsButton">Filter</button>
                                </div>
                            </form>
                            <br>
                        </div>

                        <!-- Container for jTable -->
                        <div id="StudentTableContainer">
                        </div>
                        <!-- An area to show selected rows (for demonstration) -->
                        <br>
                        <button id="DeleteAllButton" class="btn btn-primary">Delete all selected records</button>
                        {{-- Selected rows (refreshed on <b>selectionChanged</b> event): --}}
                        {{-- <div id="SelectedRowList"> --}}
                        {{-- No row selected! Select rows to see here... --}}
                        {{-- </div> --}}

                    </div>
                </div>
            </div>

        </div>

    </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/jtable/js/jquery.jtable.js') }}"></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/jtable.js') }}"></script>

@stop
