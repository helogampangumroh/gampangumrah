@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Tasks
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('css/pages/todolist.css') }}" />
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}">
    <!-- end of page level css -->

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Tasks</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Tasks</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <div class="row">
            <!-- To do list -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="card todolist">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title mb-0">
                            <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                                data-l="true"></i>
                            To Do List
                        </h4>
                    </div>
                    <div class="card-body nopadmar">
                        <div class="card-body">
                            <div class="scroller_height">
                                <div class="row list_of_items">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="add_list adds">
                            {!! Form::open(['class' => 'form', 'id' => 'main_input_box']) !!}
                            <div class="mb-3">
                                {!! Form::label('task_description', 'Task description: ') !!}
                                {!! Form::text('task_description', null, [
                                    'class' => 'form-control',
                                    'id' => 'task_description',
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="mb-3">
                                {!! Form::label('task_deadline', 'Deadline: ') !!}
                                {!! Form::text('task_deadline', null, [
                                    'class' => 'form-control datepicker',
                                    'id' => 'task_deadline',
                                    'onkeydown' => 'return false',
                                    'data-date-format' => 'YYYY/MM/DD',
                                    'required' => 'required',
                                    'autocomplete' => 'off',
                                ]) !!}
                            </div>
                            <button type="submit" class="btn btn-primary add_button">
                                Add Task
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- content -->
    <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/tasks.js') }}"></script>

@stop
