<div class="row">

<!-- Id Keberangkatan Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('id_keberangkatan', 'No. Keberangkatan:') !!}
    {!! Form::text('id_keberangkatan', null, ['class' => 'form-control']) !!}
    <input name="username" type="hidden" value="{{ Sentinel::getUser()->email }}">
</div>

<!-- Id Jamaah Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('id_jamaah', 'Id Jamaah:') !!}
    <select name="id_jamaah" class="form-select" required >
        <option value="">Select</option>
        @foreach ($getuser as $user)
            <option value="{{ $user->id }}">{{  $user->first_name . ' - ' . $user->email }}</option>
        @endforeach
    </select>
</div>

<!-- Id Layanan Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('id_layanan', 'Id Layanan:') !!}
    <select name="id_layanan" class="form-select" required >
        <option value="">Select</option>
        @foreach ($getlayanan as $layanan)
            <option value="{{ $layanan->kode_layanan }}">{{ $layanan->nama . ' - ' . $layanan->harga }}</option>
        @endforeach
    </select>
</div>

<!-- Id Hotel Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('id_hotel', 'Id Hotel:') !!}
    <select name="id_hotel" class="form-select" required >
        <option value="">Select</option>
        @foreach ($gethotel as $hotel)
            <option value="{{ $hotel->id_hotel }}">{{ $layanan->nama_hotel . ' - ' . $layanan->alamat }}</option>
        @endforeach
    </select>
</div>

<!-- Tanggal Keberangkatan Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('tanggal_keberangkatan', 'Tanggal Keberangkatan:') !!}
    {!! Form::date('tanggal_keberangkatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Maskapai Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('maskapai', 'Maskapai:') !!}
    {!! Form::text('maskapai', null, ['class' => 'form-control']) !!}
</div>

<!-- Lama Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('lama', 'Lama Hari:') !!}
    {!! Form::text('lama', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Kuota Seat Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('total_kuota_seat', 'Total Kuota Seat:') !!}
    {!! Form::text('total_kuota_seat', null, ['class' => 'form-control']) !!}
</div>

<!-- Asuransi Perjalanan Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('asuransi_perjalanan', 'Asuransi Perjalanan:') !!}
    {!! Form::text('asuransi_perjalanan', null, ['class' => 'form-control']) !!}
</div>

<!-- No Seat Pesawat Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('no_seat_pesawat', 'No Seat Pesawat:') !!}
    {!! Form::text('no_seat_pesawat', null, ['class' => 'form-control']) !!}
</div>

<!-- Penaggung Jawab Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('penaggung_jawab', 'Penaggung Jawab:') !!}
    {!! Form::text('penaggung_jawab', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-12 col-sm-6 pb-3">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<hr>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    <a href="{!! route('admin.keberangkatans.index') !!}" class="btn btn-secondary mr-3">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

</div>
