@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form examples
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/form_examples.css') }}" rel="stylesheet" />

@stop
{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Form Examples</h1>
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
            <li class="active">Form Examples</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ps-3 pe-3">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-md-12 col-lg-6 col-sm-12 col-12">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="my-3">
                    <div class="card " id="hidepanel1">
                        <div class="card-header bg-primary text-white ">
                            <span>
                                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff"
                                    data-hc="white"></i>
                                Basic Form 1
                            </span>
                            <span class="float-end">
                                <i class="fa fa-chevron-up clickable"></i>
                                <i class="fa fa-times removepanel clickable"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="#">
                                <!-- CSRF Token -->
                                <!-- Name input-->
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 form-label" for="name">Name</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="name" name="name" type="text" placeholder="Your name"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- Email input-->
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 form-label" for="email">Your
                                            E-mail</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="email" name="email" type="text" placeholder="Your email"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- Message body -->
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 form-label" for="message">Your
                                            message</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <textarea class="form-control resize_vertical h120" id="message" name="message"
                                                placeholder="Please enter your message here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 form-label" for="upload">File
                                            Upload</label>
                                        <div class="col-md-9 col-12 col-lg-9">
                                            <div class="input-group image-preview">
                                                <input type="text" class="form-control image-preview-filename"
                                                    disabled="disabled">
                                                <!-- don't give a name === doesn't send on POST/GET -->
                                                <span class="input-group-btn">
                                                    <!-- image-preview-clear button -->
                                                    <button type="button" class="btn btn-secondary image-preview-clear"
                                                        style="display:none; border-radius:0 !important; border: 1px solid rgba(0, 0, 0, 0.16);">
                                                        <span class="fa  fa-times"></span> Clear
                                                    </button>
                                                    <!-- image-preview-input -->
                                                    <div class="btn btn-secondary image_radius image-preview-input"
                                                        style="margin-left:-3px;">
                                                        <span class="fa fa-folder-open"></span>
                                                        <span class="image-preview-input-title">Browse</span>
                                                        <input type="file" accept="image/png, image/jpeg, image/gif"
                                                            name="" /> <!-- rename it -->
                                                    </div>
                                                </span>
                                            </div><!-- /input-group image-preview [TO HERE]-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Form actions -->
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-end">
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--basic form 2 starts-->
                <div class="my-3">
                    <div class="card" id="hidepanel2">
                        <div class="card-header bg-info text-white">
                            <span>
                                <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff"
                                    data-hc="white"></i>
                                Basic Form 2
                            </span>
                            <span class="float-end">
                                <i class="fa fa-chevron-up clickable"></i>
                                <i class="fa fa-times removepanel clickable"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="#" method="">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-lg-3 col-12 form-label" for="name1">E-mail
                                            Address</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="name1" name="name" type="text"
                                                placeholder="Enter your Email" class="form-control">
                                        </div>
                                    </div>
                                    <!-- Email input-->
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-lg-3 col-12 form-label" for="password">Password</label>
                                        <div class="col-md-9 col-12 col-lg-9">
                                            <input id="password" name="password" type="password"
                                                placeholder="Enter your Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-check" style="margin-left:130px;">
                                        <label>
                                            <input type="checkbox" class="form-check-input">&nbsp; Stay signed in</label>
                                    </div>
                                    <!-- Form actions -->
                                    <div class="row my-2">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <button type="submit" class="btn btn-info btn-sm">Sign in</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <!--panel body ends-->
                    </div>
                </div>
                <!--input form starts-->
                <div class="my-3">
                    <div class="card " id="hidepanel5">
                        <div class="card-header bg-warning text-white">
                            <span>
                                <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff"
                                    data-hc="white"></i>
                                Form Inputs
                            </span>
                            <span class="float-end">
                                <i class="fa fa-chevron-up clickable"></i>
                                <i class="fa fa-times removepanel clickable"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <form role="form">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="User name">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <span class="input-group-text image_radius">.00</span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fas fa-euro-sign" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-text Form image_radius">.00</span>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-outline-secondary input-group-text image_radius"
                                            type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                        style="width: 200px; height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-secondary btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-secondary fileinput-exists color_a"
                                            data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--md-6 starts-->
                <!--form control starts-->
                <div class="card" id="hidepanel6">
                    <div class="card-header bg-success text-white ">
                        <span>
                            <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            Form Controls
                        </span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <form role="form" id="form_controls">
                            <div class="mb-3">
                                <label for="input">Text Input</label>
                                <input class="form-control" id="input">
                                <p class="form-text">Example block-level help text here.</p>
                            </div>
                            <div class="mb-3">
                                <label for="input2">Text Input with Placeholder</label>
                                <input class="form-control" placeholder="Enter text" id="input2">
                            </div>
                            <div class="mb-3">
                                <label>Static Control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
                            <div class="mb-3">
                                <label for="area">Text area</label>
                                <textarea class="form-control resize_vertical h80" id="area"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Checkboxes</label>
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" class="form-check-input" value="">&nbsp; Checkbox
                                        1</label>
                                </div>
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" class="form-check-input" value=""> &nbsp; Checkbox
                                        2</label>
                                </div>
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" class="form-check-input" value="">&nbsp;Checkbox
                                        3</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Inline Checkboxes</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">3</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Radio Buttons</label>
                                <div class="form-check">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="form-check-input"
                                            id="optionsRadios1" value="option1">&nbsp; Radio 1</label>
                                </div>
                                <div class="form-check">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="form-check-input"
                                            id="optionsRadios2" value="option2">&nbsp; Radio 2</label>
                                </div>
                                <div class="form-check">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="form-check-input"
                                            id="optionsRadios3" value="option3">&nbsp; Radio 3</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Inline Radio Buttons</label>
                                <div class="form-check form-check-inline"> <label class="form-check-label ">
                                        &nbsp;<input type="radio" class="form-check-input" name="optionsRadiosInline"
                                            id="optionsRadiosInline1" value="option1"> 1</label></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="select1">Select</label>
                                <select class="form-select" id="select1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="multi">Multiple Selects</label>
                                <select multiple class="form-select" id="multi">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                        style="width: 200px; height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-secondary btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-secondary fileinput-exists color_a ms-2"
                                            data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Button</button>
                            <button type="reset" class="btn btn-secondary" id="reset">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--md-6 ends-->
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--md-6 starts-->
                <!--validation states starts-->
                <div class="card " id="hidepanel4">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            Validation States
                        </span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="mb-3 has-success">
                                <label class="form-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>
                            <div class="mb-3 has-warning">
                                <label class="form-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>
                            <div class="mb-3 has-error">
                                <label class="form-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <div class="card " id="hidepanel3">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="leaf" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            Disabled Fieldsets
                        </span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label>Disabled input</label>
                                    <input class="form-control" type="text" placeholder="Disabled input"
                                        aria-label="Disabled input example" disabled>
                                </div>
                                <div class="mb-3">
                                    <label>Disabled select menu</label>
                                    <select class="form-select" aria-label="Disabled select example" disabled>
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>
                                        <input type="checkbox" class="form-check-input" disabled>&nbsp; Disabled
                                        Checkbox</label>
                                </div>
                                <button type="submit" class="btn my-2">Disabled Button</button>
                            </fieldset>
                        </form>

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

    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/form_examples.js') }}"></script>

@stop
