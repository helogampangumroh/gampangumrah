@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Simple Tables
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- page level css -->
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Simple Tables</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">DataTables</a>
            </li>
            <li class="bg-active">Simple Tables</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box bg-primary text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Simple Table
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Airi Satou</td>
                                        <td>Kelly</td>
                                        <td>Satou124</td>
                                        <td>
                                            <span class="badge text-bg-success text-white">Approved</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Angelica343</td>
                                        <td>
                                            <span class="badge text-bg-info text-white">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Cox111</td>
                                        <td>
                                            <span class="badge text-bg-warning text-white">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Bradley</td>
                                        <td>
                                            <span class="badge text-bg-danger text-white">Blocked</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                <div class="portlet box bg-danger text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="wifi" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Bordered Table
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Airi Satou</td>
                                        <td>Kelly</td>
                                        <td>Satou124</td>
                                        <td>
                                            <span class="badge text-bg-success text-white">Approved</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Angelica343</td>
                                        <td>
                                            <span class="badge text-bg-info text-white">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Cox111</td>
                                        <td>
                                            <span class="badge text-bg-warning text-white">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Bradley</td>
                                        <td>
                                            <span class="badge text-bg-danger text-white">Blocked</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END BORDERED TABLE PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box bg-info text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="timer" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Striped Rows Table
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Airi Satou</td>
                                        <td>Kelly</td>
                                        <td>Satou124</td>
                                        <td>
                                            <span class="badge text-bg-success text-white">Approved</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Angelica343</td>
                                        <td>
                                            <span class="badge text-bg-info text-white">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Cox111</td>
                                        <td>
                                            <span class="badge text-bg-warning text-white">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Bradley</td>
                                        <td>
                                            <span class="badge text-bg-danger text-white">Blocked</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN CONDENSED TABLE PORTLET-->
                <div class="portlet box bg-warning text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="film" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Condensed Table
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Airi Satou</td>
                                        <td>Kelly</td>
                                        <td>Satou124</td>
                                        <td>
                                            <span class="badge text-bg-success text-white">Approved</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Angelica343</td>
                                        <td>
                                            <span class="badge text-bg-info text-white">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Cox111</td>
                                        <td>
                                            <span class="badge text-bg-warning text-white">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Bradley</td>
                                        <td>
                                            <span class="badge text-bg-danger text-white">Blocked</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Bradley</td>
                                        <td>
                                            <span class="badge text-bg-danger text-white">Blocked</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END CONDENSED TABLE PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box bg-danger text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Color Rows
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class Name</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-active">
                                        <td class="bg-active">1</td>
                                        <td class="bg-active">active</td>
                                        <td class="bg-active">Column heading</td>
                                        <td class="bg-active">Column heading</td>
                                        <td class="bg-active">Column heading</td>
                                    </tr>
                                    <tr class="bg-success">
                                        <td class="bg-success">2</td>
                                        <td class="bg-success">bg-success</td>
                                        <td class="bg-success">Column heading</td>
                                        <td class="bg-success">Column heading</td>
                                        <td class="bg-success">Column heading</td>
                                    </tr>
                                    <tr class="bg-warning">
                                        <td class="bg-warning">3</td>
                                        <td class="bg-warning">bg-warning</td>
                                        <td class="bg-warning">Column heading</td>
                                        <td class="bg-warning">Column heading</td>
                                        <td class="bg-warning">Column heading</td>
                                    </tr>
                                    <tr class="bg-danger">
                                        <td class="bg-danger">4</td>
                                        <td class="bg-danger">danger</td>
                                        <td class="bg-danger">Column heading</td>
                                        <td class="bg-danger">Column heading</td>
                                        <td class="bg-danger">Column heading</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box bg-secondary text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="pen" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Advanced Table
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <i class="livicon" data-name="briefcase" data-size="16" data-c="#666666"
                                                data-hc="#666666" data-loop="true"></i>

                                            From
                                        </th>
                                        <th>
                                            <i class="livicon" data-name="doc-portrait" data-size="16" data-c="#666666"
                                                data-hc="#666666" data-loop="true"></i>
                                            Descrition
                                        </th>
                                        <th>
                                            <i class="fa fa-bookAiri Satou"></i> Total
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">Pixel Ltd</a>
                                        </td>
                                        <td>Server Purchase</td>
                                        <td>
                                            52560.10$
                                            <span class="badge text-bg-success text-white">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-sm green-stripe">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Smart House</a>
                                        </td>
                                        <td>Furniture Purchase</td>
                                        <td>
                                            5760.00$
                                            <span class="badge text-bg-warning text-white">Pending</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-sm yellow-stripe">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">FoodMaster Ltd</a>
                                        </td>
                                        <td>Annual Expenses</td>
                                        <td>
                                            12400.00$
                                            <span class="badge text-bg-primary text-white">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-sm blue-stripe">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">WaterPure Ltd</a>
                                        </td>
                                        <td>Payment 2013</td>
                                        <td>
                                            610.50$
                                            <span class="badge text-bg-danger text-white">Overdue</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-sm red-stripe">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box bg-primary text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="screenshot" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Columns Tables
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="bg-active">active</td>
                                        <td class="bg-success">bg-success</td>
                                        <td class="bg-warning">bg-warning</td>
                                        <td class="bg-danger">danger</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="bg-active">active</td>
                                        <td class="bg-success">bg-success</td>
                                        <td class="bg-warning">bg-warning</td>
                                        <td class="bg-danger">danger</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="bg-active">active</td>
                                        <td class="bg-success">bg-success</td>
                                        <td class="bg-warning">bg-warning</td>
                                        <td class="bg-danger">danger</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="bg-active">active</td>
                                        <td class="bg-success">bg-success</td>
                                        <td class="bg-warning">bg-warning</td>
                                        <td class="bg-danger">danger</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
            <div class="col-md-12 col-lg-6 col-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box bg-danger text-white mb-4">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="pencil" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Bootstrap Table
                        </div>
                    </div>
                    <div class="portlet-body bg-white p-2">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <i class="livicon" data-name="briefcase" data-size="16" data-c="#666666"
                                                data-hc="#666666" data-loop="true"></i>
                                            Company
                                        </th>
                                        <th>
                                            <i class="livicon" data-name="user" data-size="16" data-c="#666666"
                                                data-hc="#666666" data-loop="true"></i>
                                            Contact
                                        </th>
                                        <th>
                                            <i class="livicon" data-name="shopping-cart-in" data-size="16"
                                                data-c="#666666" data-hc="#666666" data-loop="true"></i>
                                            Total
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="highlight">
                                            <div class="success"></div>
                                            <a href="#">HP</a>
                                        </td>
                                        <td>Ramos</td>
                                        <td>2560.60$</td>
                                        <td>
                                            <a href="#"
                                                class="btn default btn-sm d-flex justify-content-evenly py-2 purple">
                                                <i class="livicon" data-name="pen" data-loop="true" data-color="#000"
                                                    data-hovercolor="black" data-size="14"></i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="highlight">
                                            <div class="info"></div>
                                            <a href="#">Google</a>
                                        </td>
                                        <td>Adam</td>
                                        <td>560.60$</td>
                                        <td>
                                            <a href="#"
                                                class="btn default btn-sm black d-flex justify-content-evenly px-0 py-2">
                                                <i class="livicon" data-name="trash" data-loop="true" data-color="#000"
                                                    data-hovercolor="black" data-size="14"></i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="highlight">
                                            <div class="success"></div>
                                            <a href="#">Apple</a>
                                        </td>
                                        <td>Daniel</td>
                                        <td>3460.60$</td>
                                        <td>
                                            <a href="#"
                                                class="btn default btn-sm purple d-flex justify-content-evenly px-0 py-2">
                                                <i class="livicon" data-name="pen" data-loop="true" data-color="#000"
                                                    data-hovercolor="black" data-size="14"></i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="highlight">
                                            <div class="warning"></div>
                                            <a href="#">Microsoft</a>
                                        </td>
                                        <td>Nick</td>
                                        <td>2560.60$</td>
                                        <td>
                                            <a href="#"
                                                class="btn default btn-sm blue d-flex justify-content-evenly px-0 py-2">
                                                <i class="livicon" data-name="share" data-loop="true" data-color="#000"
                                                    data-hovercolor="black" data-size="14"></i>
                                                Share
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
