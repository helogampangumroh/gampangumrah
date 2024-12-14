<!-- Kode Kementerian Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode_kementerian', 'Kode Kementerian:') !!}
    {!! Form::number('kode_kementerian', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kementerian Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama_kementerian', 'Nama Kementerian:') !!}
    {!! Form::text('nama_kementerian', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.kementerians.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
