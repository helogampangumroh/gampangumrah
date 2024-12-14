<!-- Kode Kelurahan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode_kelurahan', 'Kode Kelurahan:') !!}
    {!! Form::text('kode_kelurahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Judul Field -->
<div class="form-group col-sm-12">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.kelurahans.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
