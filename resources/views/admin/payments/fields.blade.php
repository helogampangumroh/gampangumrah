<!-- Kode Pembayaran Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode', 'Kode Pembayaran:') !!}
    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Bank Jamaah Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama_bank_jamaah', 'Nama Bank Jamaah:') !!}
    {!! Form::text('nama_bank_jamaah', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Atas Nama Jamaah Field -->
<div class="form-group col-sm-12">
    {!! Form::label('bank_atas_nama_jamaah', 'Bank Atas Nama Jamaah:') !!}
    {!! Form::text('bank_atas_nama_jamaah', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomor Rek Bank Jamaah Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nomor_rek_bank_jamaah', 'Nomor Rek Bank Jamaah:') !!}
    {!! Form::text('nomor_rek_bank_jamaah', null, ['class' => 'form-control']) !!}
</div>

<!-- Nominal Pembayaran Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nominal_pembayaran', 'Nominal Pembayaran:') !!}
    {!! Form::text('nominal_pembayaran', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Pembayaran Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tanggal_pembayaran', 'Tanggal Pembayaran:') !!}
    {!! Form::text('tanggal_pembayaran', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Bank Tujuan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama_bank_tujuan', 'Nama Bank Tujuan:') !!}
    {!! Form::text('nama_bank_tujuan', null, ['class' => 'form-control']) !!}
</div>

<!-- No Rek Tujuan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_rek_tujuan', 'No Rek Tujuan:') !!}
    {!! Form::text('no_rek_tujuan', null, ['class' => 'form-control']) !!}
</div>

<!-- Atas Nama Rek Tujuan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('atas_nama_rek_tujuan', 'Atas Nama Rek Tujuan:') !!}
    {!! Form::text('atas_nama_rek_tujuan', null, ['class' => 'form-control']) !!}
</div>

<!-- Potongan Admin Field -->
<div class="form-group col-sm-12">
    {!! Form::label('potongan_admin', 'Potongan Admin:') !!}
    {!! Form::text('potongan_admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.payments.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
