@extends('template.master')
@section('container')

<div class="text-center mb-5 mt-3">
    <h3>Halaman Tambah Data</h3>
</div>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <form action="/cast" method="post">
            @csrf
            <div class="form-group">
                <label for="/cast" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" autofocus required>
            </div>
            <div class="form-group">
                <label for="/cast" class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" placeholder="Masukkan Umur Anda" autofocus required>
            </div>
            <div class="form-group">
                <label for="/cast" class="form-label">Bio</label>
                <textarea name="bio" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Bio Anda" style="resize: none;"></textarea>
            </div>
            <div class="nav justify-content-end">
                <button class="btn btn-success">Tambah Data</button>
            </div>
   </div>
 </div>


@endsection
