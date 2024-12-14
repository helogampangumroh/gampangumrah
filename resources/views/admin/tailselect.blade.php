@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Tail Select
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/tailselect/css/tail.select.css') }}" rel="stylesheet" />
    <!--end of page vendors -->
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
                <a href="#">Forms</a>
            </li>
            <li class="active">
                Tail Select
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content px-3">
        <div class="card">
            <h4 class="card-header ps-3 bg-primary"> Select </h4>
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 m-3 ">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-success">Basic Select</div>
                        <div class="card-body">
                            <select class="form-select select1" id="select1">
                                <option>My First Option</option>
                                <option>My Second Option</option>
                                <option>My Third Option</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-info"> Multiple tags</div>
                        <div class="card-body">
                            <select class="form-select select2 " id="select2" placeholder="Select City" multiple>
                                <option>Hyderabad</option>
                                <option>Mumbai</option>
                                <option>Delhi</option>
                                <option>Bangalore</option>
                                <option>Pune</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card mb-3">
                        <div class="card-header bg-success">Multiple Select with Optgroup</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <select class="form-select select3" id="select3" multiple>
                                    <option></option>
                                    <optgroup label="Mobiles">
                                        <option>Redmi</option>
                                        <option>Lenovo</option>
                                        <option>Microsoft</option>
                                    </optgroup>
                                    <optgroup label="Electronics">
                                        <option>Air Conditioner</option>
                                        <option>Microwave oven</option>
                                        <option>Refrigerator</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-info">Multiple Select without Optgroup</div>
                        <div class="card-body">
                            <select class="form-select select4 " id="select4" placeholder="Select City" multiple>
                                <option>Hyderabad</option>
                                <option>Mumbai</option>
                                <option>Delhi</option>
                                <option>Bangalore</option>
                                <option>Pune</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 mx-3">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-warning">Multiple Select</div>
                        <div class="card-body">
                            <p>
                                <label for="car-brands">Select a car brand and populate a hidden field. Also check the
                                    console for the array result.</label>
                            </p>
                            <p>
                                <select id="car-brands" name="car_brands[]" multiple>
                                    <option value="volkswagen">Volkswagen</option>
                                    <option value="toyota">Toyota</option>
                                    <option value="ford">Ford</option>
                                    <option value="honda">Honda</option>
                                    <option value="chevrolet">Chevrolet</option>
                                    <option value="bmw">BMW</option>
                                    <option value="nissan">Nissan</option>
                                    <option value="audi">Audi</option>
                                    <option value="mercedes-benz">Mercedes-Benz</option>
                                    <option value="hyundai">Hyundai</option>
                                    <option value="kia">Kia</option>
                                    <option value="subaru">Subaru</option>
                                    <option value="mazda">Mazda</option>
                                    <option value="jeep">Jeep</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="porsche">Porsche</option>
                                    <option value="jaguar">Jaguar</option>
                                    <option value="lexus">Lexus</option>
                                    <option value="tesla">Tesla</option>
                                    <option value="land-rover">Land Rover</option>
                                    <option value="dodge">Dodge</option>
                                    <option value="acura">Acura</option>
                                    <option value="mini">MINI</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="buick">Buick</option>
                                    <option value="cadillac">Cadillac</option>
                                    <option value="gmc">GMC</option>
                                    <option value="infiniti">Infiniti</option>
                                    <option value="lincoln">Lincoln</option>
                                    <option value="maserati">Maserati</option>
                                    <option value="chrysler">Chrysler</option>
                                    <option value="ram">Ram</option>
                                    <option value="mitsubishi">Mitsubishi</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="subaru">Subaru</option>
                                    <option value="mazda">Mazda</option>
                                    <option value="jeep">Jeep</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="porsche">Porsche</option>
                                    <option value="jaguar">Jaguar</option>
                                    <option value="lexus">Lexus</option>
                                    <option value="tesla">Tesla</option>
                                    <option value="land-rover">Land Rover</option>
                                    <option value="dodge">Dodge</option>
                                    <option value="acura">Acura</option>
                                    <option value="mini">MINI</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="buick">Buick</option>
                                    <option value="cadillac">Cadillac</option>
                                    <option value="gmc">GMC</option>
                                    <option value="infiniti">Infiniti</option>
                                    <option value="lincoln">Lincoln</option>
                                    <option value="maserati">Maserati</option>
                                    <option value="chrysler">Chrysler</option>
                                    <option value="ram">Ram</option>
                                    <option value="mitsubishi">Mitsubishi</option>
                                </select>
                            </p>
                            <p>
                                <input type="text" id="car_brands_list" name="car_brands_list" size="48"
                                    placeholder="Select options above...">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@stop
@section('footer_scripts')
    <script src="{{ asset('vendors/tailselect/js/tail.select.js') }}"></script>
    <script src="{{ asset('js/pages/tailselect.js') }}"></script>
@stop
