<div class="card-body table-responsive">
<table class="table table-striped table-bordered" id="keberangkatans-table" width="100%">
    <thead>
     <tr>
        <th>Id Keberangkatan</th>
        <th>Id Jamaah</th>
        <th>Id Hotel</th>
        <th>Tanggal Keberangkatan</th>
        <th>Maskapai</th>
        <th>Lama</th>
        <th>Total Kuota Seat</th>
        <th>Asuransi Perjalanan</th>
        <th>No Seat Pesawat</th>
        <th>Penaggung Jawab</th>
        <th>Id Layanan</th>
        <th>Catatan</th>
        <th>Status</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($keberangkatans as $keberangkatan)
        <tr>
            <td>{!! $keberangkatan->id_keberangkatan !!}</td>
            <td>{!! $keberangkatan->id_jamaah !!}</td>
            <td>{!! $keberangkatan->id_hotel !!}</td>
            <td>{!! $keberangkatan->tanggal_keberangkatan !!}</td>
            <td>{!! $keberangkatan->maskapai !!}</td>
            <td>{!! $keberangkatan->lama !!}</td>
            <td>{!! $keberangkatan->total_kuota_seat !!}</td>
            <td>{!! $keberangkatan->asuransi_perjalanan !!}</td>
            <td>{!! $keberangkatan->no_seat_pesawat !!}</td>
            <td>{!! $keberangkatan->penaggung_jawab !!}</td>
            <td>{!! $keberangkatan->id_layanan !!}</td>
            <td>{!! $keberangkatan->catatan !!}</td>
            <td>{!! $keberangkatan->status !!}</td>
            <td>
                 <a href="{{ route('admin.keberangkatans.show', collect($keberangkatan)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view keberangkatan"></i>
                 </a>
                 <a href="{{ route('admin.keberangkatans.edit', collect($keberangkatan)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit keberangkatan"></i>
                 </a>
                 <a href="{{ route('admin.keberangkatans.confirm-delete', collect($keberangkatan)->first() ) }}" data-bs-toggle="modal" data-bs-target="#delete_confirm" data-id="{{ route('admin.keberangkatans.delete', collect($keberangkatan)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete keberangkatan"></i>

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
        $('#keberangkatans-table').DataTable({
                      responsive: true,
                      pageLength: 1
                  });
                  $('#keberangkatans-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#keberangkatans-table').on( 'length.dt', function ( e, settings, len ) {
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
