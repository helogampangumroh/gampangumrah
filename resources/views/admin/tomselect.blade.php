@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Tom Select
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/tomSelect/css/tom-select.css') }}" rel="stylesheet" />
    <!--end of page vendors -->
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Tom Select
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
                Tom Select
            </li>
        </ol>
    </section>
    </section>
    <!-- Main content -->
    <section class="content px-3">
        <div class="card">
            <h4 class="card-header ps-3 mb-3 bg-primary">Basic Select options </h4>
            <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-warning">Basic Input</div>
                        <div class="card-body">
                            <input id="input-tag" value="awesome,neat" autocomplete="off" placeholder="How cool is this?">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-warning">Basic Select</div>
                        <div class="card-body">
                            <select id="select-beast" placeholder="Select a person..." autocomplete="off">
                                <option value="">Select a person...</option>
                                <option value="4">Thomas Edison</option>
                                <option value="1">Nikola</option>
                                <option value="3">Nikola Tesla</option>
                                <option value="5">Arnold Schwarzenegger</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-info"> Select (allow empty)</div>
                        <div class="card-body">
                            <select id="select-beast-empty" class="form-select" data-placeholder="Select a person..."
                                autocomplete="off">
                                <option value="">None</option>
                                <option value="4">Thomas Edison</option>
                                <option value="1">Nikola</option>
                                <option value="3">Nikola Tesla</option>
                                <option value="5">Arnold Schwarzenegger</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card mb-3">
                        <div class="card-header bg-info">Select Disabled</div>
                        <div class="card-body">
                            <select id="select-beast-disabled" disabled placeholder="Select a person..." autocomplete="off">
                                <option value="">Select a person...</option>
                                <option value="4">Thomas Edison</option>
                                <option value="1">Nikola</option>
                                <option value="3" selected>Nikola Tesla</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-success">Select option disabled</div>
                        <div class="card-body">
                            <select id="select-beast-single-disabled" placeholder="Select a person..." autocomplete="off">
                                <option value="">Select a person...</option>
                                <option value="4" disabled>Thomas Edison</option>
                                <option value="1">Nikola</option>
                                <option value="3" selected>Nikola Tesla</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header bg-success"> Multiple Select</div>
                        <div class="card-body">
                            <select id="select-state" name="state[]" multiple placeholder="Select a state..."
                                autocomplete="off">
                                <option value="">Select a state...</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA" selected>California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY" selected>Wyoming</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="card-header ps-3 bg-warning mb-3">Custom options </h4>
            <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header"> Custom Option & Item HTML</div>
                        <div class="card-body ">
                            <select id="select-links" class="custom-option" multiple
                                placeholder="Pick some links..."></select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header"> Custom Options (using Javascript) </div>
                        <div class="card-body">
                            <select id="custom_js" class="custom-option" multiple>
                                <option value="">How cool is this?</option>
                                <option selected>amazing</option>
                                <option selected>awesome</option>
                                <option>cool</option>
                                <option>excellent</option>
                                <option>great</option>
                                <option>neat</option>
                                <option>superb</option>
                                <option>wonderful</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-success mb-3">Email Contacts</h4>
                <div class="col mx-3">
                    <div class="card mb-3">
                        <div class="card-header"> Email Contacts</div>
                        <div class="card-body">
                            <select id="select-to" class="contacts" placeholder="Pick some people..."></select>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-primary mb-3">Form Validation</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header"> Browser Default</div>
                            <div class="card-body">
                                <form>
                                    <select id="select-person" placeholder="Select a person..." required>
                                        <option value="">Select a person...</option>
                                        <option value="4">Thomas Edison</option>
                                        <option value="1">Nikola</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                    <div class="py-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header"> Form Validation</div>
                            <div class="card-body">
                                <form id="bootstrap-form" novalidate>
                                    <select id="select-bootstrap" required placeholder="Select a person..."
                                        name="beast">
                                        <option value="">Select a person...</option>
                                        <option value="4">Thomas Edison</option>
                                        <option value="1">Nikola</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a person
                                    </div>
                                    <div class="py-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-danger mb-3">Internatinalization</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header"> RTL Input</div>
                            <div class="card-body">
                                <div dir="rtl">
                                    <input type="text" id="input-tags" value="awesome,neat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header"> RTL Select</div>
                            <div class="card-body">
                                <select id="select-beasts" placeholder="Select a person..." dir="rtl">
                                    <option value="">Select a person...</option>
                                    <option value="4">Thomas Edison</option>
                                    <option value="1">Nikola</option>
                                    <option value="3">Nikola Tesla</option>
                                    <option value="5">Arnold Schwarzenegger</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3  bg-success mb-3">Item Creation</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Regex Filter</div>
                            <div class="card-body">
                                <select id="select-words-regex" multiple
                                    placeholder="Enter a word matching the pattern..."></select>
                                <div class="control-group form-inline">
                                    <label for="regex" class="me-2">Pattern</label>
                                    <input type="text" id="regex" value="^a+$" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header"> Minimum Length</div>
                            <div class="card-body">
                                <select id="select-words-length" multiple
                                    placeholder="Enter a word longer than the minimum number of characters..."></select>
                                <div class="control-group form-inline">
                                    <label for="length" class="me-2">Minimum length</label>
                                    <input id="length" value="2" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Unique Words</div>
                            <div class="card-body">
                                <select id="select-words-unique" multiple
                                    placeholder="Enter unique words (case-insensitive)..."></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <h4 class="card-header ps-3 bg-secondary mb-3">API</h4>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header"> API</div>
                                <div class="card-body">
                                    <select id="select-tools" multiple placeholder="Pick a tool..."></select>
                                    <div class="buttons pt-3">
                                        <input type="button" value="addItem()" id="button-additem">
                                        <input type="button" value="addOption()" id="button-addoption">
                                        <input type="button" value="setValue()" id="button-setvalue">
                                        <input type="button" value="clear()" id="button-clear">
                                        <input type="button" value="clearOptions()" id="button-clearoptions">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="card-header ps-3 bg-secondary mb-3">Large Dataset</h4>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header">Performance</div>
                                <div class="card-body">
                                    <select id="select-junk" placeholder="Start Typing..."></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-info mb-3">Locking Example</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Locked Single</div>
                            <div class="card-body">
                                <select id="select-locked-single" placeholder="No input allowed...">
                                    <option value="A">Option A</option>
                                    <option value="B" selected>Option B</option>
                                    <option value="C">Option C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Locked Multiple</div>
                            <div class="card-body">
                                <select id="select-locked" multiple placeholder="No input allowed...">
                                    <option value="A">Option A</option>
                                    <option value="B" selected>Option B</option>
                                    <option value="C" selected>Option C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-primary mb-3">Option Group Examples</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Simple</div>
                            <div class="card-body">
                                <select id="select-gear" multiple placeholder="Select gear...">
                                    <option value="">Select gear...</option>
                                    <optgroup label="Climbing">
                                        <option value="pitons">Pitons</option>
                                        <option value="cams">Cams</option>
                                        <option value="nuts">Nuts</option>
                                        <option value="bolts">Bolts</option>
                                        <option value="stoppers">Stoppers</option>
                                        <option value="sling">Sling</option>
                                    </optgroup>
                                    <optgroup label="Skiing">
                                        <option value="skis">Skis</option>
                                        <option value="skins">Skins</option>
                                        <option value="poles">Poles</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">DIsabled Group</div>
                            <div class="card-body">
                                <select id="select-gear-disabled" multiple placeholder="Select gear...">
                                    <option value="">Select gear...</option>
                                    <optgroup label="Climbing">
                                        <option value="pitons">Pitons</option>
                                        <option value="cams">Cams</option>
                                        <option value="nuts">Nuts</option>
                                        <option value="bolts">Bolts</option>
                                        <option value="stoppers">Stoppers</option>
                                        <option value="sling">Sling</option>
                                    </optgroup>
                                    <optgroup label="Skiing" disabled>
                                        <option value="skis">Skis</option>
                                        <option value="skins">Skins</option>
                                        <option value="poles">Poles</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Repeated options</div>
                            <div class="card-body">
                                <select id="select-repeated-options" multiple>
                                    <option value="">Select...</option>
                                    <optgroup label="Group 1">
                                        <option value="a">Item A</option>
                                        <option value="b">Item B</option>
                                    </optgroup>
                                    <optgroup label="Group 2">
                                        <option value="a">Item A</option>
                                        <option value="b">Item B</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Programmatic</div>
                            <div class="card-body">
                                <select id="select-animal" class="demo-animals" placeholder="Select animal..."></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-warning mb-3">Option Array Examples</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Javascript Array</div>
                            <div class="card-body">
                                <select id="select-tool" placeholder="Pick a tool..."></select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Data-* Attributes</div>
                            <div class="card-body">
                                <select id="data-attr">
                                    <option value="chrome"
                                        data-src="https://cdn1.iconfinder.com/data/icons/logotypes/32/chrome-32.png">Google
                                        Chrome</option>
                                    <option value="ffox"
                                        data-src="https://cdn0.iconfinder.com/data/icons/flat-round-system/512/firefox-32.png">
                                        Mozilla Firefox</option>
                                    <option value="ie"
                                        data-src="https://cdn0.iconfinder.com/data/icons/flat-round-system/512/internet_explorer-32.png">
                                        Internet Explorer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-primary mb-3">Remote Data Examples</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Ajax Loading</div>
                            <div class="card-body">
                                <select id="select-repo" class="select-item" placeholder="Pick a repository..."
                                    multiple></select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Load Once</div>
                            <div class="card-body"><select id="select-states" class="select-item"
                                    placeholder="Software: WordPress, Apache ..." multiple></select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Ajax Loading, Custom Scoring, and Inline Display</div>
                            <div class="card-body">
                                <div id="select-repo-inline">
                                    <select id="select-repo2" class="select-item" placeholder="Pick a repository..."
                                        multiple></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="card-header ps-3 bg-success mb-3">Event Examples</h4>
                <div class="row row-cols-md-2 row-cols-sm-1 mx-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">Event Logger</div>
                            <div class="card-body">
                                <select id="select-st" multiple name="state[]">
                                    <option value="">Select a state...</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY" selected>Wyoming</option>
                                </select>
                                <h3>Event Log</h3>
                                <pre id="log" style="height:20vh;overflow:auto"></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">onDelete Prompt</div>
                            <div class="card-body">
                                <input id="inpt-tags" value="awesome,neat" autocomplete="off"
                                    placeholder="How cool is this?">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@stop
@section('footer_scripts')
    <script src="{{ asset('vendors/tomSelect/js/tom-select.complete.min.js') }}"></script>
    <script src="{{ asset('js/pages/tomselect.js') }}"></script>
@stop
