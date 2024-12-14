<div class="card-body table-responsive">
<table class="table table-striped table-bordered" id="payments-table" width="100%">
    <thead>
     <tr>
        <th>Kode Pembayaran</th>
        <th>Nama Bank Jamaah</th>
        <th>Bank Atas Nama Jamaah</th>
        <th>Nomor Rek Bank Jamaah</th>
        <th>Nominal Pembayaran</th>
        <th>Tanggal Pembayaran</th>
        <th>Catatan</th>
        <th>Nama Bank Tujuan</th>
        <th>No Rek Tujuan</th>
        <th>Atas Nama Rek Tujuan</th>
        <th>Potongan Admin</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr>
            <td>{!! $payment->kode !!}</td>
            <td>{!! $payment->nama_bank_jamaah !!}</td>
            <td>{!! $payment->bank_atas_nama_jamaah !!}</td>
            <td>{!! $payment->nomor_rek_bank_jamaah !!}</td>
            <td>{!! $payment->nominal_pembayaran !!}</td>
            <td>{!! $payment->tanggal_pembayaran !!}</td>
            <td>{!! $payment->catatan !!}</td>
            <td>{!! $payment->nama_bank_tujuan !!}</td>
            <td>{!! $payment->no_rek_tujuan !!}</td>
            <td>{!! $payment->atas_nama_rek_tujuan !!}</td>
            <td>{!! $payment->potongan_admin !!}</td>
            <td>
                 <a href="{{ route('admin.payments.show', collect($payment)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view payment"></i>
                 </a>
                 <a href="{{ route('admin.payments.edit', collect($payment)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit payment"></i>
                 </a>
                 <a href="{{ route('admin.payments.confirm-delete', collect($payment)->first() ) }}" data-bs-toggle="modal" data-bs-target="#delete_confirm" data-id="{{ route('admin.payments.delete', collect($payment)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete payment"></i>

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
        $('#payments-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#payments-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#payments-table').on( 'length.dt', function ( e, settings, len ) {
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
