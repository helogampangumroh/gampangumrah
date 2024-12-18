<!-- Kode Bank Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode_bank', 'Kode Bank:') !!}
    {!! Form::text('kode_bank', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Bank Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama_bank', 'Nama Bank:') !!}
    {!! Form::text('nama_bank', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.banks.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
