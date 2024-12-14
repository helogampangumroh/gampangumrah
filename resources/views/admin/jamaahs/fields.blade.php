<div class="row">

    <!-- Id User Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_user', 'Id User:') !!}
        {!! Form::text('id_user', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Kementerian Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_kementerian', 'Id Kementerian:') !!}
        {!! Form::text('id_kementerian', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nama Lengkap Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
        {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Noktp Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('noktp', 'Noktp:') !!}
        {!! Form::number('noktp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nopaspor Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('nopaspor', 'Nopaspor:') !!}
        {!! Form::text('nopaspor', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Tgl Lahir Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
        {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Tempat Lahir Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Jeniskelamin Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('jeniskelamin', 'Jeniskelamin:') !!}
        {!! Form::text('jeniskelamin', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Status Pernikahan Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('status_pernikahan', 'Status Pernikahan:') !!}
        {!! Form::text('status_pernikahan', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Telp Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('telp', 'Telp:') !!}
        {!! Form::number('telp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Whatsapp Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('whatsapp', 'Whatsapp:') !!}
        {!! Form::number('whatsapp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Akunig Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('akunig', 'Akunig:') !!}
        {!! Form::text('akunig', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Akunfb Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('akunfb', 'Akunfb:') !!}
        {!! Form::text('akunfb', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Rekening Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_rekening', 'Id Rekening:') !!}
        {!! Form::text('id_rekening', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Layanan Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_layanan', 'Id Layanan:') !!}
        {!! Form::text('id_layanan', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Payment Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_payment', 'Id Payment:') !!}
        {!! Form::text('id_payment', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Keberangkatan Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_keberangkatan', 'Id Keberangkatan:') !!}
        {!! Form::text('id_keberangkatan', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Id Files Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('id_files', 'Id Files:') !!}
        {!! Form::text('id_files', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Status Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>

    <!-- No Invoice Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('no_invoice', 'No Invoice:') !!}
        {!! Form::text('no_invoice', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Total Harga Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('total_harga', 'Total Harga:') !!}
        {!! Form::text('total_harga', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Dp Field -->
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('dp', 'Dp:') !!}
        {!! Form::text('dp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Catatan Field -->
    <div class="form-group col-12 col-sm-6">
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
