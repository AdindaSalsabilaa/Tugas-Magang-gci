@extends ('template.master')

@section ('container')

<table class="table table-bordered table-striped">
    <thead>
        <tr style="background-color: azure">
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