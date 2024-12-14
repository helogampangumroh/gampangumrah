<!-- Kode Layanan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode_layanan', 'Kode Layanan:') !!}
    {!! Form::text('kode_layanan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Hari Field -->
<div class="form-group col-sm-12">
    {!! Form::label('total_hari', 'Total Hari:') !!}
    {!! Form::text('total_hari', null, ['class' => 'form-control']) !!}
</div>

<!-- Keberangkatan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keberangkatan', 'Keberangkatan:') !!}
    {!! Form::text('keberangkatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Hotel Field -->
<div class="form-group col-sm-12">
    {!! Form::label('hotel', 'Hotel:') !!}
    {!! Form::text('hotel', null, ['class' => 'form-control']) !!}
</div>

<!-- Include Field -->
<div class="form-group col-sm-12">
    {!! Form::label('include', 'Include:') !!}
    {!! Form::text('include', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Field -->
<div class="form-group col-sm-12">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::number('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Diskon Field -->
<div class="form-group col-sm-12">
    {!! Form::label('diskon', 'Diskon:') !!}
    {!! Form::number('diskon', null, ['class' => 'form-control']) !!}
</div>

<!-- Maskapai Field -->
<div class="form-group col-sm-12">
    {!! Form::label('maskapai', 'Maskapai:') !!}
    {!! Form::text('maskapai', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.layanans.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
