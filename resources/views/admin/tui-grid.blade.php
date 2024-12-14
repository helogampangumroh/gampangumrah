@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    TUI Grid
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('vendors/tui/css/tui-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/tui/css/tui-pagination.min.css') }}">
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Tail Select
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Toast-UI</a>
            </li>
            <li class="active">
                TUI-Grid
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content px-3">
        <div class="row row-cols-1 grid-table">
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Basic Grid
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid1" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Complex Columns
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid2" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Custom Editor
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid3" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Custom Renderer
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid4" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Relation Between Columns
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid5"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Attributes
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid6"></div>
                    </div>
                </div>
            </div>

            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Themes
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-12 col-md-6 col-lg-8">

                                <div id="grid7" class="h400"></div>
                            </div>
                            <div class="col col-12 col-md-6 col-lg-4">
                                <div id="theme">
                                    <div class="preset">
                                        <h4>Preset</h4>
                                        <button class="btn-theme" data-preset="default">default</button>
                                        <button class="btn-theme" data-preset="striped">striped</button>
                                        <button class="btn-theme" data-preset="clean">clean</button>
                                    </div>
                                    <div class="custom">
                                        <h4>Custom options</h4>
                                        <p>
                                            <textarea id="custom-text" class="h300">
{
selection: {
    background: '#4daaf9',
    border: '#004082'
},
scrollbar: {
        background: '#f5f5f5',
        thumb: '#d9d9d9',
        active: '#c1c1c1'
    },
row: {
    even: {
        background: '#f3ffe3'
    },
    hover: {
        background: '#ccc'
        }
    },
cell: {
    normal: {
    background: '#fbfbfb',
    border: '#e0e0e0',
    showVerticalBorder: true
    },
    header: {
        background: '#eee',
        border: '#ccc',
        showVerticalBorder: true
    },
    rowHeader: {
        border: '#ccc',
        showVerticalBorder: true
    },
    editable: {
        background: '#fbfbfb'
    },
    selectedHeader: {
        background: '#d8d8d8'
    },
    focused: {
        border: '#418ed4'
    },
    disabled: {
        text: '#b0b0b0'
    }
}
}
                                </textarea>
                                        </p>
                                        <p><button class="btn-custom">Apply</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            DatePicker
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid8"></div>
                    </div>
                </div>
            </div>

            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Summary
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid9" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Customizing Row headers
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid11" class="h400"></div>
                    </div>
                </div>
            </div>

            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            WhiteSpace
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid12" class="h300"></div>
                    </div>
                </div>
            </div>

            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Tree
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid14" class="h400"></div>
                    </div>
                </div>
            </div>

            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Custom Event
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid15" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Frozen Columns
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid16" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Dummy Rows
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid17" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Column resize
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid18" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Sort
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid19" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Validation
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid20" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Header Align
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid21" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Setting Width, Height
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div> <label for="width">Column Width</label>
                            <select id="width" class="mb-2">
                                <option value="150" selected="selected">150</option>
                                <option value="100">100</option>
                                <option value="40">40</option>
                            </select>

                            <label for="height">Row height</label>
                            <select id="height" class="mb-2">
                                <option value="70" selected="selected">70</option>
                                <option value="50">50</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div id="grid22" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Client Pagination
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="btn-wrapper">
                            <button id="appendBtn">appendBtn</button>
                            <button id="prependBtn">prependBtn</button>
                        </div>
                        <div id="grid23"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Filter
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid24" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Large Data Performance
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid25" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Infinite Scroll
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid26" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Export
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid27" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Drag and Drop
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid28" class="h400"></div>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card panel-info filterable">
                    <div class="card-header text-primary">
                        <h3 class="card-title text-primary d-inline">
                            Dynamic rowSpan
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="grid29" class="h400"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->

    </section>

@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('vendors/tui/js/tui-pagination.min.js') }}"></script>
    <script src="{{ asset('vendors/tui/js/tui-grid.min.js') }}"></script>
    <script src="{{ asset('js/pages/tui-grid.js') }}"></script>

    <!-- end of page level js -->
@stop
