<!-- Kode Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
</div>

<!-- Judul Field -->
<div class="form-group col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Hari Field -->
<div class="form-group col-sm-12">
    {!! Form::label('total_hari', 'Total Hari:') !!}
    {!! Form::number('total_hari', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Field -->
<div class="form-group col-sm-12">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::number('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Rute Field -->
<div class="form-group col-sm-12">
    {!! Form::label('rute', 'Rute:') !!}
    {!! Form::text('rute', null, ['class' => 'form-control']) !!}
</div>

<!-- Jadwal Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jadwal', 'Jadwal:') !!}
    {!! Form::text('jadwal', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.services.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
