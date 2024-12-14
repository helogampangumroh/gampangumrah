@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    GUI CRUD Builder
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/jquery_steps/css/jquery.steps.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pages/custom_gui_builder.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>GUI CRUD Generator</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-c="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">GUI CRUD Generator</a></li>
            <li class="active">Generator Builder</li>
        </ol>
    </section>
    <section class="content ">
        <div id="info" class="d-none"></div>
        <div class="card ">
            <div class="card-header bg-primary text-white">
                <h4 class="box-title">Laravel Generator Builder</h4>
            </div>
            <div class="card-body">
                @if (in_array(false, $permissions))
                    <div class="alert alert-danger alert-dismissible margin5">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <h4>CRUD files may not generated because of following errors</h4>
                        @foreach ($permissions as $key => $permission)
                            @if (!$permission)
                                <strong>Error:</strong> {{ $key }} not writable<br>
                            @endif
                        @endforeach
                        please fix errors and try again.
                    </div>
                @endif

                @if (!$pendingMigrations)
                    <div class="alert alert-danger alert-dismissible margin5">

                        <h4>You have pending migrations!</h4>
                        CRUD builder runs current migrations as well pending migrations.<br>
                        uncheck "Migrate" option or proceed to migrate them aswell!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif


                <form id="form" action="#" class="basic_steps">
                    <h6>Model Details</h6>
                    <div class="mt-2 mb-3">
                        <div class="row">


                            <div class="col-md-12 mb-3">
                                <ul class="instructions">
                                    <li>Model Name: based on model name CRUD generates model, controller and table</li>
                                    <li>Command Type: Select Command type scaffold Generator</li>
                                    <li>Table Name: If you want custom table name change the table name.</li>

                                </ul>
                            </div>
                            <div class="form-group mb-3 col-md-4">
                                <label for="txtModelName">Model Name<span class="required">*</span></label>
                                <input type="text" class="form-control text-capitalize" required name="model_name"
                                    id="txtModelName" placeholder="Enter name">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="drdCommandType">Command Type</label>
                                <select id="drdCommandType" class="form-control w100">
                                    <option value="infyom:scaffold">Scaffold Generator</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="txtCustomTblName">Table Name</label> <i class="fa fa-info"
                                    data-bs-toggle="tooltip" title="Following Laravel Table Convention"></i>
                                <input type="text" class="form-control" id="txtCustomTblName" required
                                    placeholder="Enter table name" name="tableName">
                            </div>
                        </div>
                    </div>
                    <h6>Options</h6>
                    <div class="mt-2 mb-3">
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <ul class="instructions">
                                    <li>Options : Selectr options what you want.</li>
                                    <li>Prefix : Prefix added to models, controllers, requests, repositories.</li>
                                    <li>Icon : Icon displayed in Left menu.</li>
                                    <li>Paginate : If you want change paginate enter paginate length.</li>

                                </ul>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="txtModelName">Options</label>

                                <div class="mb-3 bordercol-transparent">
                                    <div class="form-check form-check-inline chk-align">
                                        <label>
                                            <input type="checkbox" class="flat-red" id="chkDelete"><span
                                                class="chk-label-margin"> Soft Delete </span>
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline chk-align" id="chDataTable">
                                        <label>
                                            <input type="checkbox" class="flat-red" id="chkDataTable" checked> <span
                                                class="chk-label-margin">Datatables</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline chk-align" id="chMigrate">
                                        <label>
                                            <input type="checkbox" class="flat-red" id="chkMigrate" checked> <span
                                                class="chk-label-margin">Migrate</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-md-4 row-cols-2">
                                <div class="mb-3 col ">
                                    <label for="txtPrefix">Prefix</label>
                                    <input type="text" class="form-control" id="txtPrefix" placeholder="Enter prefix">
                                </div>
                                {{-- <div class="clearfix d-none d-sm-block"></div> --}}
                                <div class="mb-3 col">
                                    <label for="leftMenuIcons">Icon</label>
                                    <input type="text" name="icon_name" class="form-control" data-bs-toggle="modal"
                                        data-bs-target="#iconsModal" id="leftMenuIcons" placeholder="Select your icon">
                                </div>

                                <div class="mb-3 col">
                                    <label for="iconColor">Icon Color</label>
                                    <select name="iconColor" id="iconColor" class="form-select w100">
                                        <option value="#EF6F6C" class="bg-danger">Danger</option>
                                        <option value="#F89A14" class="bg-warning">warning</option>
                                        <option value="#31B0D5" class="bg-info">Info</option>
                                        <option value="#418BCA" class="bg-primary">Primary</option>
                                        <option value="#6CC66C" class="bg-success">Success</option>
                                    </select>
                                </div>

                                <div class="mb-3 col">
                                    <label for="txtPaginate">Paginate</label>
                                    <input type="number" class="form-control" value="10" id="txtPaginate"
                                        placeholder="" min="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Fields</h6>
                    <div class="mt-2 mb-3">

                        <div class="col-md-12 mb-3">
                            <ul class="instructions">
                                <li><strong>If you need a field name <code>First Name</code>, type field name as
                                        <code>first_name</code></strong></li>
                                <li>Field Name: it is for table fileds, don't use any special characters.</li>
                                <li>DB Type: Select type of database</li>
                                <li>Validations : If you want add validation to fields, select validation type.</li>
                                <li>HTML Type : select HTML type.</li>
                                <li>Primary : If you want make a field as primary check it.</li>
                                <li>In Index : If you uncheck This checkbox it won't show the field in index page</li>

                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                The Primary key <code>id</code> and timestamps <code>created_at</code> and
                                <code>updated_at</code>
                                will be created automatically!
                            </div>
                        </div>
                        <div class="table-responsive col-md-12">
                            <table class="table table-striped table-bordered" id="table">
                                <thead class="no-border">
                                    <tr>
                                        <th>Field Name</th>
                                        <th>DB Type</th>
                                        <th>Validations</th>
                                        <th>Html Type</th>
                                        <th class="w68">Primary</th>
                                        <th class="w63">Fillable</th>
                                        <th class="w65">In Form</th>
                                        <th class="w67">In Index</th>
                                        <th class="w70">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="container" class="no-border-x no-border-y ui-sortable">

                                </tbody>
                            </table>
                        </div>


                        <div class="form-inline col-md-12 pt-2">
                            <div class="mb-3 chk-align bordercol-transparent">
                                <button type="button" class="btn btn-primary btn-flat" id="btnAdd"> Add Field
                                </button>
                            </div>
                        </div>

                        <div class="form-inline col-md-12 div_gnr_rst">
                            <div class="mb-3 btn_generate">
                                <button type="submit" class="btn btn-success btn-flat" id="btnGenerate">Generate
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="mb-3 btn_generate">
                    <button type="button" class="btn btn-secondary btn-flat" id="btnReset" data-bs-toggle="modal"
                        data-bs-target="#confirm-delete"> Reset
                    </button>
                </div>

            </div>
        </div>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Confirm Reset</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true"></button>

                    </div>

                    <div class="modal-body">
                        <p class="font_size16">This will reset all of your fields. Do you want to
                            proceed?</p>

                        <p class="debug-url"></p>
                    </div>

                    <div class="modal-footer">
                        <a id="btnModalReset" class="btn btn-flat btn-danger btn-ok mr-auto"
                            data-bs-dismiss="modal">Yes</a>
                        <button type="button" class="btn btn-flat btn-secondary" data-bs-dismiss="modal">No
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="iconsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select Icon</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <i class="livicon" data-name="home" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <i class="livicon" data-name="info" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="trash" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="edit" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="dashboard" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="desktop" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="bell" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="bank" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="servers" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="shield" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="gear" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="globe" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="image" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="users" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="list" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="thumbnails-big" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="user" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="wrench" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="map" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="paper-plane" data-size="28" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('vendors/jquery_steps/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('js/pluginjs/validate.js') }}"></script>
    <script src="{{ asset('js/pages/custom_gui_builder.js') }}"></script>
<script src="{{ asset('vendors/str/js/main.min.js') }}" type="text/javascript"></script>
    <script>
        $('input[type=radio]').iCheck({
            checkboxClass: 'iradio_square',
            radioClass: 'iradio_square-blue'
        });

        var modelCheckUrl = "{{ url('admin/modelCheck') }}";
        var generateUrl = "{!! url('') !!}/admin/generator_builder/generate";
        var componentUrl = "{!! url('') !!}/admin/field_template";

        function removeItem(e) {
            e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
        }
    </script>
@stop
