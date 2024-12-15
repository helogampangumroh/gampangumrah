
@include('common/header')

	<!-- Main Content Start -->
	<main class="page-content space-bottom">
		<div class="container">


            <div class="row g-3">
                <div class="col-12 col-md-12">

                    <div id="notific">
                        @include('notifications')
                    </div>

                    {!! Form::model($user, [
                    'url' => URL::to('my-account'),
                    'method' => 'put',
                    'class' => 'form-horizontal',
                    'enctype' => 'multipart/form-data',
                    ]) !!}
                    {{ csrf_field() }}


                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="mb-3 {{ $errors->first('pic', 'has-error') }}">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="fileinput fileinput-new position-relative" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail max-width-height2">
                                                @if ($user->pic)
                                                <img src="{{ $user->pic }}" alt="img" class="img-fluid" style=" border-radius: 10px; overflow: hidden; " />
                                                @elseif($user->gender === 'pria')
                                                <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                    class="img-fluid" style=" border-radius: 10px; overflow: hidden; " />
                                                @elseif($user->gender === 'wanita')
                                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                    class="img-fluid" style=" border-radius: 10px; overflow: hidden; " />
                                                @else
                                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                    class="img-fluid" style=" border-radius: 10px; overflow: hidden; " />
                                                @endif
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail max-width-height1"></div>
                                            <div class="mt-2">
                                                <span class="btn btn-primary btn-file w-100">
                                                <input type="file" name="pic" id="pic" />
                                                </span>
                                                <!-- <span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</span> -->
                                            </div>
                                        </div>
                                        <span class="form-text">{{ $errors->first('pic', ':message') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-9">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Biodata
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="mb-3 {{ $errors->first('first_name', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class="form-label">
                                                Nama Lengkap:
                                                <span class='require'>*</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="input-group">

                                                    <input type="text" placeholder=" " name="first_name" id="first_name"
                                                    class="form-control" value="{!! old('first_name', $user->first_name) !!}">
                                                </div>
                                                <span class="form-text">{{ $errors->first('first_name', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 {{ $errors->first('email', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class="form-label">
                                                Email:
                                                <span class='require'>*</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="input-group">

                                                    <input type="text" placeholder=" " id="email" name="email"
                                                    class="form-control" value="{!! old('email', $user->email) !!}">
                                                </div>
                                                <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="selectGender" class="form-label">Jenis Kelamin</label>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="form-check custom-check style-2">
                                                            <input type="radio" class="btn-check" name="gender" value="pria" id="selectGender1" autocomplete="off"
                                                            @if ($user->gender === 'pria') checked="checked" @endif >
                                                            <label class="btn" for="selectGender1">
                                                                <span class="radio-check"></span>Pria
                                                            </label>
                                                        </div>
                                                        <div class="form-check custom-check style-2">
                                                            <input type="radio" class="btn-check" name="gender" value="wanita" id="selectGender2" autocomplete="off"
                                                            @if ($user->gender === 'wanita') checked="checked" @endif >
                                                            <label class="btn" for="selectGender2">
                                                                <span class="radio-check"></span>Wanita
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3  {{ $errors->first('bio', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label for="" class="form-label">Bio <small>(brief intro):</small></label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <textarea name="bio" id="bio" class="form-control resize_vertical h100">{!! old('bio', $user->bio) !!}</textarea>
                                            </div>
                                            {!! $errors->first('bio', '<span class="form-text">:message</span>') !!}
                                        </div>
                                    </div>

                                    <div class="mb-3 {{ $errors->first('dob', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class= "form-label"> DOB:
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="input-group">

                                                    @if ($user->dob === '')
                                                    {!! Form::text('dob', null, ['id' => 'datepicker', 'class' => 'form-control']) !!}
                                                    @else
                                                    {!! Form::text('dob', old('dob', $user->dob), [
                                                    'id' => 'datepicker',
                                                    'class' => 'form-control',
                                                    'data-date-format' => 'YYYY-MM-DD',
                                                    ]) !!}
                                                    @endif
                                                </div>
                                                <span class="form-text">{{ $errors->first('dob', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Alamat
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="mb-3 {{ $errors->first('address', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class="form-label">
                                                Address:
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <textarea class="form-control resize_vertical h120" id="add1" name="address">{!! old('address', $user->address) !!}</textarea>
                                            </div>
                                            <span class="form-text">{{ $errors->first('address', ':message') }}</span>
                                        </div>
                                    </div>

                                    <div class=" {{ $errors->first('user_state', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class="form-label" for="state">State:</label>
                                            </div>
                                            <div class="col-lg-12 col-12 col-md-12 col-sm-12 ">
                                                <div class="input-group">

                                                    <input type="text" placeholder=" " id="state" class="form-control"
                                                    name="user_state" value="{!! old('user_state', $user->user_state) !!}" />
                                                </div>
                                            </div>
                                            <span class="form-text">{{ $errors->first('user_state', ':message') }}</span>
                                        </div>
                                    </div>

                                    <div class="mb-3 {{ $errors->first('city', 'has-error') }}">
                                        <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <label class="form-label" for="city">City:</label>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="input-group ">

                                                <input type="text" placeholder=" " id="city" class="form-control"
                                                    name="city" value="{!! old('city', $user->city) !!}" />
                                            </div>
                                        </div>
                                        <span class="form-text">{{ $errors->first('city', ':message') }}</span>
                                    </div>

                                    <div class="mb-3 {{ $errors->first('postal', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class=" form-label" for="postal">Postal:</label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="input-group">

                                                    <input type="text" placeholder=" " id="postal" class="form-control"
                                                    name="postal" value="{!! old('postal', $user->postal) !!}" />
                                                </div>
                                                <span class="form-text">{{ $errors->first('postal', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Kata Sandi
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="mb-3 {{ $errors->first('password', 'has-error') }}">
                                        <p class="text-warning">Biarkan Kosong Jika Tidak Ingin Diganti!</p>
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <label class="form-label">
                                                Password:
                                                <span class='require'>*</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="input-group ">

                                                    <input type="password" name="password" placeholder=" " id="pwd"
                                                    class="form-control">
                                                </div>
                                                <span class="form-text">{{ $errors->first('password', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 {{ $errors->first('password_confirm', 'has-error') }}">
                                        <div class="row">
                                            <label class="form-label">Confirm Password: <span class='require'>*</span></label>
                                            <div class="col-lg-12 col-12">
                                                <div class="input-group ">

                                                    <input type="password" name="password_confirm" placeholder=" " id="cpwd"
                                                    class="form-control">
                                                </div>
                                                <span class="form-text">{{ $errors->first('password_confirm', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12 col-12">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a href="{{ route('logout') }}" class="btn btn-danger float-end">Keluar</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

		</div>
	</main>
	<!-- Main Content End -->

@include('common/footer')
