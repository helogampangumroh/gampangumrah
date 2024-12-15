<div class="row">

    <!-- Id User Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('id_user', 'Id User:') !!}
        <select name="id_user" class="form-select" required >
            <option value="">Select</option>
            @foreach ($getuser as $user)
                <option value="{{ $user->id }}">{{  $user->first_name . ' - ' . $user->email }}</option>
            @endforeach
        </select>
    </div>

    <!-- Id Kementerian Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('id_kementerian', 'Id Kementerian:') !!}
        <select name="id_kementerian" class="form-select" required >
            <option value="">Select</option>
            @foreach ($getkementerian as $menteri)
                <option value="{{ $menteri->kode_kementerian }}">{{ $menteri->nama_kementerian }}</option>
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

    <!-- Id Payment Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('id_payment', 'Id Payment:') !!}
        <select name="id_payment" class="form-select" required >
            <option value="">Belum Payment</option>
            @foreach ($getpayment as $payment)
                <option value="{{ $payment->id }}">{{ $payment->id . ' - ' . $payment->bank_atas_nama_jamaah . ' - ' . $payment->nomor_rek_bank_jamaah }}</option>
            @endforeach
        </select>
    </div>

    <!-- Id Keberangkatan Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('id_keberangkatan', 'Id Keberangkatan:') !!}
        {!! Form::text('id_keberangkatan', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nama Lengkap Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
        {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Noktp Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('noktp', 'Noktp:') !!}
        {!! Form::number('noktp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nopaspor Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('nopaspor', 'Nopaspor:') !!}
        {!! Form::text('nopaspor', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Tgl Lahir Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
        {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Tempat Lahir Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Jeniskelamin Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('jeniskelamin', 'Jeniskelamin:') !!}
        <select name="jeniskelamin" class="form-select" required >
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
    </div>

    <!-- Status Pernikahan Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('status_pernikahan', 'Status Pernikahan:') !!}
        {!! Form::text('status_pernikahan', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Telp Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('telp', 'Telp:') !!}
        {!! Form::number('telp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Whatsapp Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('whatsapp', 'Whatsapp:') !!}
        {!! Form::number('whatsapp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Akunig Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('akunig', 'Akunig:') !!}
        {!! Form::text('akunig', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Akunfb Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('akunfb', 'Akunfb:') !!}
        {!! Form::text('akunfb', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Rekening Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('id_rekening', 'Id Rekening:') !!}
        {!! Form::text('id_rekening', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Status Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>

    <!-- No Invoice Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('no_invoice', 'No Invoice:') !!}
        {!! Form::text('no_invoice', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Total Harga Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('total_harga', 'Total Harga:') !!}
        {!! Form::text('total_harga', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Dp Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('dp', 'Dp:') !!}
        {!! Form::text('dp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Catatan Field -->
    <div class="form-group col-12 col-sm-6 pb-3">
        {!! Form::label('catatan', 'Catatan:') !!}
        {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12 text-center">
        <hr>
        <a href="{!! route('admin.jamaahs.index') !!}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>

</div>
