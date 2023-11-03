@extends ('template.master')

@section ('container')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<table class="table table-bordered table-striped">
    <thead>
        <tr style="background-color: #BA55D3">
            <th style="text-align:center; font-weight:bold">No</th>
            <th style="text-align:center; font-weight:bold">Nama</th>
            <th style="text-align:center; font-weight:bold">Email</th>
            <th style="text-align:center; font-weight:bold">Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = DB::table('users')->get();
        ?>
        @foreach($users as $users)
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->password }}</td>
        </tr>
        @endforeach
    </tbody>
    
    </table>
@endsection