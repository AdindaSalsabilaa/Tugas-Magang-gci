@extends('template.master')
@section('container')
<div class="text-center mb-5 mt-3">
    <h3>Halaman Edit</h3>
</div>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <form action="{{url('cast/'.$cast->id)}}" method="post">
            @method('get')
            @csrf
            <div class="form-group">
                <label for="cast" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" value="{{$cast->nama}}">
            </div>
            <div class="form-group">
                <label for="cast" class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" placeholder="Masukkan Umur Anda" value="{{$cast->umur}}">
            </div>
            <div class="form-group">
                <label for="cast" class="form-label">Bio</label>
                <input name="bio" class="form-control" value="{{ $cast->bio }}"></input>
            </div>
            <div class="nav justify-content-end">
                <button class="btn btn-success">Simpan Ubah Data</button>
            </div>
        </form>
    </div>
</div>

@endsection
