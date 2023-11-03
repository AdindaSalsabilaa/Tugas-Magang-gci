@extends('template.master')
@section('container')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CastTable</h1>
          </div>
          
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman CastTable</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

<div class="nav justify-content-end mb-4">
    <a href="/cast/create" class="btn btn-outline-success">Tambah Data</a>
</div>
<table class="table table-striped">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <thead>
    <tr style="background-color: #87CEFA">
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Umur</th>
            <th class="text-center">Bio</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cast as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $item->nama }}</td>
                <td class="text-center">{{ $item->umur }}</td>
                <td class="text-center">{{ $item->bio }}</td>
                <td class="text-center">
                    <a href="{{ url('cast/'.$item->id) }}" class="btn btn-secondary btn-sm"
                        data-toggle="modal" data-target="#CastModal{{ $item->id }}">
                        <i class="nav-icon fas fa-book"></i> Shows
                    </a>

                    <a href="{{ url('cast/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                        <i class="nav-icon fas fa-edit"></i> Edit
                    </a>

                  <button class="btn btn-danger btn-sm btn-delete" id="btn-delete" data-url="{{ url('cast/delete/'.$item->id) }}"><i class="fa fa-trash"></i>Delete</button>

                    
                </td>
            </tr>

            <!-- Modal for Show Data -->
            <div class="modal fade" id="CastModal{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="CastModalLabel{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Show Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{ url('cast/show/'.$item->id) }}" method="post" id="showForm{{ $item->id }}">
                                @csrf
                                @method('get')
                            <p><strong>Nama:</strong> {{ $item->nama }}</p>
                            <p><strong>Umur:</strong> {{ $item->umur }}</p>
                            <p><strong>Bio:</strong> {{ $item->bio }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            
        @endforeach

    </tbody>
</table>


@endsection

@push('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(function() {
    $('.btn-delete').click(function() {
      var url = $(this).attr('data-url');
      Swal.fire({
                 title: 'Are you sure?',
                 text: "You won't be able to revert this!",
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Yes, delete it!'
                 }).then((result) => {
                 if (result.isConfirmed) {

				$.ajax({
					url: url,
					method: 'post',
          data : {
          "_token": "{{ csrf_token() }}",
          }
				}).done(data => {
					if(!data.error) {
            location.reload();
						Swal.fire(
                 'Deleted!',
                 'Your file has been deleted.',
                 'success'
                  )
					} else {
						 Swal.fire(
                 'Deleted!',
                 'Your file has been deleted.',
                 'success'
                  )
					}
				}).fail(xhr => {
					// swal('Galat', 'Terjadi kesalahan saat menghapus data.', 'error');
				});

                
                  }
                  })
    });
  });
</script>
@endpush