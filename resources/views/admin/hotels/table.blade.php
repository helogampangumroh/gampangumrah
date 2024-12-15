<div class="card-body table-responsive">
<table class="table table-striped table-bordered" id="hotels-table" width="100%">
    <thead>
     <tr>
        <th>Username</th>
        <th>Id Hotel</th>
        <th>Nama Hotel</th>
        <th>Bintang</th>
        <th>Alamat</th>
        <th>Fasilitas</th>
        <th>Total Tamu Perroom</th>
        <th>Jenis Tempat Tidur</th>
        <th>Nama Kamar</th>
        <th>Total Kamar</th>
        <th>Catatan</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($hotels as $hotel)
        <tr>
            <td>{!! $hotel->username !!}</td>
            <td>{!! $hotel->id_hotel !!}</td>
            <td>{!! $hotel->nama_hotel !!}</td>
            <td>{!! $hotel->bintang !!}</td>
            <td>{!! $hotel->alamat !!}</td>
            <td>{!! $hotel->fasilitas !!}</td>
            <td>{!! $hotel->total_tamu_perroom !!}</td>
            <td>{!! $hotel->jenis_tempat_tidur !!}</td>
            <td>{!! $hotel->nama_kamar !!}</td>
            <td>{!! $hotel->total_kamar !!}</td>
            <td>{!! $hotel->catatan !!}</td>
            <td>
                 <a href="{{ route('admin.hotels.show', collect($hotel)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view hotel"></i>
                 </a>
                 <a href="{{ route('admin.hotels.edit', collect($hotel)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit hotel"></i>
                 </a>
                 <a href="{{ route('admin.hotels.confirm-delete', collect($hotel)->first() ) }}" data-bs-toggle="modal" data-bs-target="#delete_confirm" data-id="{{ route('admin.hotels.delete', collect($hotel)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete hotel"></i>

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
        $('#hotels-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#hotels-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#hotels-table').on( 'length.dt', function ( e, settings, len ) {
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
