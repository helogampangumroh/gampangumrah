@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Drop Zone
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>File Drop Zone</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">Laravel Examples</a></li>
            <li class="active">File Drop Zone</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content ps-3 pe-3">
        <div class="row">
<div class="col-lg-12">
                <div class="card " style="overflow-y:auto; overflow-x: hidden">
                    <div class="card-header bg-info text-white">
                        <span>
                            <i class="livicon" data-name="upload-alt" data-size="20" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            File Drop Zone
                        </span>
                    </div>
                    <div class="card-body" style="padding:0px !important;">
                        <div class="col-md-12" style="padding:30px;">
                            {!! Form::open([
                                'url' => URL::to('admin/file/create'),
                                'method' => 'post',
                                'id' => 'myDropzone',
                                'class' => 'dropzone',
                                'files' => true,
                            ]) !!}
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('vendors/dropzone/js/dropzone.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/dropzone.js') }}"></script>

@stop
