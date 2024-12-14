<li class="{{ Request::is('admin/jamaahs*') ? 'active' : '' }}">
    <a href="{!! route('admin.jamaahs.index') !!}">
    <i class="livicon" data-c="#333" data-hc="#333" data-name="users" data-size="18"
               data-loop="true"></i>
               Jamaah
    </a>
</li>
<li class="{{ Request::is('admin/layanans*') ? 'active' : '' }}">
    <a href="{!! route('admin.layanans.index') !!}">
    <i class="livicon" data-c="#333" data-hc="#333" data-name="wrench" data-size="18"
               data-loop="true"></i>
               Layanan
    </a>
</li>
<li class="{{ Request::is('admin/payments*') ? 'active' : '' }}">
    <a href="{!! route('admin.payments.index') !!}">
    <i class="livicon" data-c="#333" data-hc="#333" data-name="bank" data-size="18"
               data-loop="true"></i>
               Pembayaran
    </a>
</li>
<li class="{{ Request::is('admin/kementerians*') ? 'active' : '' }}">
    <a href="{!! route('admin.kementerians.index') !!}">
    <i class="livicon" data-c="#333" data-hc="#333" data-name="users" data-size="18"
               data-loop="true"></i>
               Kementerian
    </a>
</li>
<li class="{{ Request::is('admin/banks*') ? 'active' : '' }}">
    <a href="{!! route('admin.banks.index') !!}">
    <i class="livicon" data-c="#333" data-hc="#333" data-name="bank" data-size="18"
               data-loop="true"></i>
               Bank
    </a>
</li>
<li {!! Request::is('admin/kotas') || Request::is('admin/provinsis') || Request::is('admin/kelurahans') || Request::is('admin/kecamatans') ? 'class="mm-active"' : '' !!}>
    <a href="#">
        <i class="livicon" data-name="info" data-c="#333" data-hc="#333" data-size="18"
            data-loop="true"></i>
        <span class="title">Master Alamat</span>
        <span class="fas fa-angle-left"></span>
    </a>
    <ul class="sub-menu">
        <li class="{{ Request::is('admin/provinsis*') ? 'active' : '' }}">
            <a href="{!! route('admin.provinsis.index') !!}">
            <i class="fa fa-angle-double-right"></i>
                    Provinsi
            </a>
        </li>
        <li class="{{ Request::is('admin/kotas*') ? 'active' : '' }}">
            <a href="{!! route('admin.kotas.index') !!}">
            <i class="fa fa-angle-double-right"></i>
                    Kota
            </a>
        </li>
        <li class="{{ Request::is('admin/kecamatans*') ? 'active' : '' }}">
            <a href="{!! route('admin.kecamatans.index') !!}">
            <i class="fa fa-angle-double-right"></i>
                    Kecamatan
            </a>
        </li>
        <li class="{{ Request::is('admin/kelurahans*') ? 'active' : '' }}">
            <a href="{!! route('admin.kelurahans.index') !!}">
            <i class="fa fa-angle-double-right"></i>
                    Kelurahan
            </a>
        </li>
    </ul>
</li>
