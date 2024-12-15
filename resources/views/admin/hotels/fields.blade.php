<div class="row">

<!-- Id Hotel Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('id_hotel', 'Id Hotel:') !!}
    {!! Form::text('id_hotel', null, ['class' => 'form-control']) !!}
    <input name="username" type="hidden" value="{{ Sentinel::getUser()->email }}">
</div>

<!-- Nama Hotel Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('nama_hotel', 'Nama Hotel:') !!}
    {!! Form::text('nama_hotel', null, ['class' => 'form-control']) !!}
</div>

<!-- Bintang Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('bintang', 'Bintang:') !!}
    {!! Form::text('bintang', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Fasilitas Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('fasilitas', 'Fasilitas:') !!}
    {!! Form::text('fasilitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Tamu Perroom Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('total_tamu_perroom', 'Total Tamu Perroom:') !!}
    {!! Form::text('total_tamu_perroom', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Tempat Tidur Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('jenis_tempat_tidur', 'Jenis Tempat Tidur:') !!}
    {!! Form::text('jenis_tempat_tidur', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kamar Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('nama_kamar', 'Nama Kamar:') !!}
    {!! Form::text('nama_kamar', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Kamar Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('total_kamar', 'Total Kamar:') !!}
    {!! Form::text('total_kamar', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-6 col-12 pb-3">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<hr>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.hotels.index') !!}" class="btn btn-secondary">Cancel</a>
</div>

</div>
