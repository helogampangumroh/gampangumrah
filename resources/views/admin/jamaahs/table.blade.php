<div class="card-body table-responsive">
<table class="table table-striped table-bordered" id="jamaahs-table" width="100%">
    <thead>
     <tr>
        <th>Id User</th>
        <th>Id Kementerian</th>
        <th>Nama Lengkap</th>
        <th>Noktp</th>
        <th>Nopaspor</th>
        <th>Tgl Lahir</th>
        <th>Tempat Lahir</th>
        <th>Jeniskelamin</th>
        <th>Status Pernikahan</th>
        <th>Telp</th>
        <th>Whatsapp</th>
        <th>Akunig</th>
        <th>Akunfb</th>
        <th>Id Rekening</th>
        <th>Id Layanan</th>
        <th>Id Payment</th>
        <th>Id Keberangkatan</th>
        <th>Id Files</th>
        <th>Status</th>
        <th>No Invoice</th>
        <th>Total Harga</th>
        <th>Dp</th>
        <th>Catatan</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($jamaahs as $jamaah)
        <tr>
            <td>{!! $jamaah->id_user !!}</td>
            <td>{!! $jamaah->id_kementerian !!}</td>
            <td>{!! $jamaah->nama_lengkap !!}</td>
            <td>{!! $jamaah->noktp !!}</td>
            <td>{!! $jamaah->nopaspor !!}</td>
            <td>{!! $jamaah->tgl_lahir !!}</td>
            <td>{!! $jamaah->tempat_lahir !!}</td>
            <td>{!! $jamaah->jeniskelamin !!}</td>
            <td>{!! $jamaah->status_pernikahan !!}</td>
            <td>{!! $jamaah->telp !!}</td>
            <td>{!! $jamaah->whatsapp !!}</td>
            <td>{!! $jamaah->akunig !!}</td>
            <td>{!! $jamaah->akunfb !!}</td>
            <td>{!! $jamaah->id_rekening !!}</td>
            <td>{!! $jamaah->id_layanan !!}</td>
            <td>{!! $jamaah->id_payment !!}</td>
            <td>{!! $jamaah->id_keberangkatan !!}</td>
            <td>{!! $jamaah->id_files !!}</td>
            <td>{!! $jamaah->status !!}</td>
            <td>{!! $jamaah->no_invoice !!}</td>
            <td>{!! $jamaah->total_harga !!}</td>
            <td>{!! $jamaah->dp !!}</td>
            <td>{!! $jamaah->catatan !!}</td>
            <td>
                 <a href="{{ route('admin.jamaahs.show', collect($jamaah)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view jamaah"></i>
                 </a>
                 <a href="{{ route('admin.jamaahs.edit', collect($jamaah)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit jamaah"></i>
                 </a>
                 <a href="{{ route('admin.jamaahs.confirm-delete', collect($jamaah)->first() ) }}" data-bs-toggle="modal" data-bs-target="#delete_confirm" data-id="{{ route('admin.jamaahs.delete', collect($jamaah)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete jamaah"></i>

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#jamaahs-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#jamaahs-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#jamaahs-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop
