@extends('admin/layouts/default')

@section('title')
Provinsis
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Provinsi</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Provinsi</li>
        <li class="active">Provinsi List</li>
    </ol>
</section>

<section class="content">
<div class="container">
    <div class="row">
     <div class="col-12">
     @include('flash::message')
        <div class="card border-primary ">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title float-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Provinsi List
                </h4>
                <div class="float-right">
                    <a href="{{ route('admin.provinsis.create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="card-body table-responsive">
                 @include('admin.provinsis.table')

            </div>
        </div>
        </div>
 </div>
 </div>
</section>
@stop
