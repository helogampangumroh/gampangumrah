@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Wizard
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/wizard.css') }}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Form Wizards</h1>
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
            <li class="active">Form Wizards</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i> Bootstrap Wizard
                        </span>
                        <span class="float-end ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <form id="commentForm" method="post" action="#">
                            <div id="rootwizard">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active color_accrd" href="#tab1" data-bs-toggle="tab">First</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab2" data-bs-toggle="tab" class="nav-link color_accrd ms-2">Second</a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-bs-toggle="tab" class="nav-link color_accrd ms-2">Third</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab1">
                                        <div class="form-group mb-3">
                                            <label for="userName" class="form-label">User name *</label>
                                            <input id="userName" name="username" type="text"
                                                placeholder="Enter your name" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label">Email *</label>
                                            <input id="email" name="email" placeholder="Enter your Email"
                                                type="text" class="form-control email" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label">Password *</label>
                                            <input id="password" name="password" type="password"
                                                placeholder="Enter your password" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="confirm" class="form-label">Confirm Password *</label>
                                            <input id="confirm" name="confirm" type="password"
                                                placeholder="Confirm your password " class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">First name *</label>
                                            <input id="name" name="fname" placeholder="Enter your First name"
                                                type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="surname" class="form-label">Last name *</label>
                                            <input id="surname" name="lname" type="text"
                                                placeholder=" Enter your Last name" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email">Gender</label>
                                            <select class="form-control" name="gender" id="gender"
                                                title="Select an account type...">
                                                <option disabled="" selected="">Select</option>
                                                <option>MALE</option>
                                                <option>FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="age" class="form-label">Age *</label>
                                            <input id="age" name="age" type="text" maxlength="3"
                                                class="form-control number" required min="17"
                                                data-bv-greaterthan-inclusive="false"
                                                data-bv-greaterthan-message="The input must be greater than or equal to 18"
                                                max="100" data-bv-lessthan-inclusive="true"
                                                data-bv-lessthan-message="The input must be less than 100">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="form-group mb-3">
                                            <label for="phone1" class="form-label">Home number *</label>
                                            <input type="text" class="form-control" id="phone1" name="phone1"
                                                placeholder="(999)999-9999">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone2" class="form-label">Personal number *</label>
                                            <input type="text" class="form-control" id="phone2" name="phone2"
                                                placeholder="(999)999-9999">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone3" class="form-label">Alternate number *</label>
                                            <input type="text" class="form-control" id="phone3" name="phone3"
                                                placeholder="(999)999-9999">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox"
                                                    class="form-check-label"> *I agree with the Terms and Conditions.
                                            </label>
                                        </div>
                                    </div>
                                    <ul class="pager wizard d-flex justify-content-between">
                                        <li class="previous">
                                            <a href="#">Previous</a>
                                        </li>
                                        <li class="next">
                                            <a href="#">Next</a>
                                        </li>
                                        <li class="next finish" style="display:none;">
                                            <a href="javascript:;">Finish</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- modal --}}
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">User Register</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>You Submitted Successfully.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/form_wizard.js') }}" type="text/javascript"></script>
@stop
