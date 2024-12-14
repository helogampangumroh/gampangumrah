<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $payment->id !!}</p>
    <hr>
</div>

<!-- Kode Pembayaran Field -->
<div class="form-group">
    {!! Form::label('kode', 'Kode Pembayaran:') !!}
    <p>{!! $payment->kode !!}</p>
    <hr>
</div>

<!-- Nama Bank Jamaah Field -->
<div class="form-group">
    {!! Form::label('nama_bank_jamaah', 'Nama Bank Jamaah:') !!}
    <p>{!! $payment->nama_bank_jamaah !!}</p>
    <hr>
</div>

<!-- Bank Atas Nama Jamaah Field -->
<div class="form-group">
    {!! Form::label('bank_atas_nama_jamaah', 'Bank Atas Nama Jamaah:') !!}
    <p>{!! $payment->bank_atas_nama_jamaah !!}</p>
    <hr>
</div>

<!-- Nomor Rek Bank Jamaah Field -->
<div class="form-group">
    {!! Form::label('nomor_rek_bank_jamaah', 'Nomor Rek Bank Jamaah:') !!}
    <p>{!! $payment->nomor_rek_bank_jamaah !!}</p>
    <hr>
</div>

<!-- Nominal Pembayaran Field -->
<div class="form-group">
    {!! Form::label('nominal_pembayaran', 'Nominal Pembayaran:') !!}
    <p>{!! $payment->nominal_pembayaran !!}</p>
    <hr>
</div>

<!-- Tanggal Pembayaran Field -->
<div class="form-group">
    {!! Form::label('tanggal_pembayaran', 'Tanggal Pembayaran:') !!}
    <p>{!! $payment->tanggal_pembayaran !!}</p>
    <hr>
</div>

<!-- Catatan Field -->
<div class="form-group">
    {!! Form::label('catatan', 'Catatan:') !!}
    <p>{!! $payment->catatan !!}</p>
    <hr>
</div>

<!-- Nama Bank Tujuan Field -->
<div class="form-group">
    {!! Form::label('nama_bank_tujuan', 'Nama Bank Tujuan:') !!}
    <p>{!! $payment->nama_bank_tujuan !!}</p>
    <hr>
</div>

<!-- No Rek Tujuan Field -->
<div class="form-group">
    {!! Form::label('no_rek_tujuan', 'No Rek Tujuan:') !!}
    <p>{!! $payment->no_rek_tujuan !!}</p>
    <hr>
</div>

<!-- Atas Nama Rek Tujuan Field -->
<div class="form-group">
    {!! Form::label('atas_nama_rek_tujuan', 'Atas Nama Rek Tujuan:') !!}
    <p>{!! $payment->atas_nama_rek_tujuan !!}</p>
    <hr>
</div>

<!-- Potongan Admin Field -->
<div class="form-group">
    {!! Form::label('potongan_admin', 'Potongan Admin:') !!}
    <p>{!! $payment->potongan_admin !!}</p>
    <hr>
</div>

