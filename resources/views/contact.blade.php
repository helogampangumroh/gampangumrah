@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Contact
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/contact.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                    data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                            </a>
                        </li>
                        <li class="d-none d-lg-block d-sm-block d-md-block">
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i>
                            <a href="#">Contact</a>
                        </li>
                    </ol>
                    <div class="float-end mt-1">
                        <i class="livicon icon3" data-name="cellphone" data-size="20" data-loop="true" data-c="#3d3d3d"
                            data-hc="#3d3d3d"></i> Contact
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Map Section Start -->
    <div class="">
        <div id="map"></div>
    </div>
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6 col-lg-6 col-12 my-3">
                <h2>Contact Form</h2>
                <!-- Notifications -->
                <div id="notific">
                    @include('notifications')
                </div>
                <form class="contact" id="contact" action="{{ route('contact') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="">
                        <input type="text" name="contact-name" class="form-control"id="floatingInput"
                            placeholder="Your name" required>
                        <label for="floatingInput">Your Name</label>
                    </div>
                    <div class="">
                        <input type="email" name="contact-email" class="form-control" id="floatingInput"
                            placeholder="Your email address" required>
                        <label for="floatingInput">Your email address</label>

                    </div>
                    <div class="">
                        <textarea name="contact-msg" class="form-control" placeholder="Your comment" required id="floatingTextarea2"></textarea>
                        <label for="floatingTextarea2">Your comment</label>
                    </div>
                    <div class="">
                        <button class="btn btn-primary me-1" type="submit">submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
            <!-- Address Section Start -->
            <div class="col-md-6 col-sm-6 my-3">
                <h2>Address</h2>
                <div class="media media-top d-flex">
                    <a href="#">
                        <div class="box-icon">
                            <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff"
                                data-hc="#fff"></i>
                        </div>
                    </a>
                    <div class="media-body ms-3">
                        <strong>Jyostna</strong>
                        <address>
                            Pediatric Surgeons of Alaska
                            <br> 3340 Providence Drive #565
                            <br> Anchorage, AK(Alaska)
                            <br> North Las Vegas, NV
                        </address>
                    </div>
                </div>
                <div class="media media-top d-flex">
                    <a href="#">
                        <div class="box-icon">
                            <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff"
                                data-hc="#fff"></i>
                        </div>
                    </a>
                    <div class="media-body ms-3">
                        <strong>Telephone:</strong>
                        <br>(703) 717-4200
                        <br /> Fax:400 423 1456
                    </div>
                </div>
            </div>
            <!-- //Address Section End -->
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script src="http://maps.google.com/maps/api/js?libraries=places&key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/gmaps/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/pages/contact.js') }}"></script>
    <!--page level js ends-->
@stop
