@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Elements
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('css/pages/formelements.css') }}" rel="stylesheet" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Advanced Form Elements
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">
                Form Elements
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12">
                <!-- credit card section -->
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="credit-card" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Credit Card
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="card-wrapper"></div>
                            <br />
                            <div>
                                <form id="card">
                                    <div class="row">
                                        <label class="col-md-3 my-2 col-form-label" for="card1">Card Number</label>
                                        <div class="col-md-9">
                                            <input name="number" required type="text" placeholder=""
                                                class="form-control" id="card1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 my-2 col-form-label" for="card2">Name on Card</label>
                                        <div class="col-md-9">
                                            <input name="name" type="text" class="form-control" maxlength="40"
                                                required id="card2" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3  my-2 col-form-label" for="card3">CVV</label>
                                        <div class="col-md-9">
                                            <input name="cvc" required type="text" placeholder=""
                                                class="form-control" id="card3" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 my-2  col-form-label" for="card4">Expiry Date</label>
                                        <div class="col-md-9">
                                            <input name="expiry" placeholder="" class="form-control" id="card4" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="lab" data-size="18" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Auto Grow
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body auto_block">
                        <div class="row">
                            <div class="col-12">
                                <label for="grow">
                                    Auto Grow Basic
                                </label>
                                <textarea placeholder="Write something here..." data-autogrow class="form-control autogrow_area h100" id="grow"></textarea>
                            </div>
                        </div>
                        <!-- /.input group -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="grow1">
                                    Heavy padding
                                </label>
                                <textarea placeholder="Write something here..." class="form-control span3 pd-45" data-autogrow></textarea>
                            </div>
                        </div>
                        <!-- /.input group -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="grow2">
                                    Medium padding with border
                                </label>
                                <textarea placeholder="Write something here..." class="form-control scroll pd resize_vertical autogrow_area h100"
                                    id="grow2"></textarea>
                            </div>
                        </div>
                        <!-- /.input group -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <label>
                                    Initially hidden
                                </label>
                                <div class="font_size14">
                                    <textarea placeholder="Write something here..." class="form-control display-no autogrow_area resize_vertical h100"
                                        data-autogrow></textarea>
                                    <a onclick="$(this).closest('.font_size14').find('textarea').toggle(); $(this).text(this.text=='Hide'?'Show':'Hide');return false;"
                                        href="#">Show</a>
                                </div>
                            </div>
                            <!-- /.input group -->

                        </div>
                    </div>
                </div>
                <!-- credit card section ends -->
            </div>
            <div class="col-md-12 col-lg-6 col-12">
                <div class="card">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Bootstrap Input MaxLength
                        </span>
                    </div>
                    <div class="card-body">
                        <!--max length starts-->
                        <div class="mb-3">
                            <label for="defaultconfig" class="form-label">
                                Default MaxLength
                            </label>
                            <input maxlength="25" name="defaultconfig" id="defaultconfig" type="text"
                                class="form-control" placeholder="Placeholder text">
                        </div>
                        <div class="mb-3">
                            <label for="thresholdconfig" class="form-label">
                                Threshold value
                            </label>
                            <input type="text" maxlength="25" name="thresholdconfig" class="form-control"
                                id="thresholdconfig" />
                        </div>
                        <div class="mb-3">
                            <label for="moreoptions" class="form-label">Options</label>
                            <input type="text" class="form-control" maxlength="25" name="moreoptions"
                                id="moreoptions" />
                        </div>
                        <div class="mb-3">
                            <label for="alloptions" class="form-label">
                                All the options
                            </label>
                            <input type="text" class="form-control" maxlength="25" name="alloptions"
                                id="alloptions" />
                        </div>
                        <div class="mb-3">
                            <label for="textarea" class="form-label">Text Area</label>
                            <textarea id="textarea" class="form-control resize_vertical" maxlength="225"
                                placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="placement" class="form-label">Position</label>
                            <input type="text" class="form-control" maxlength="25" name="placement"
                                id="placement" />
                        </div>
                        <!--min length ends-->
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <!-- InputMask -->
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('vendors/autogrow/js/jQuery-autogrow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/card/js/jquery.card.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/formelements.js') }}" type="text/javascript"></script>

@stop
